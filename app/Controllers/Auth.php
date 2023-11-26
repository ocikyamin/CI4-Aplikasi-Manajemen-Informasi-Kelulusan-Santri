<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MUser;
class Auth extends BaseController
{
    function __construct()
    {
        $this->ModelUser= new MUser();
    }
    public function index()
    {
        // dd(password_hash('UPTIK@2023', PASSWORD_BCRYPT));
        return view('Auth/index');
    }

    public function CekLogin()
    {
        $this->validate= \Config\Services::validation();
        $validate = $this->validate(
        [
        'email' => [
        'label'  => 'Email',
        'rules'  => 'required',
        'errors' => [
        'required' => '{field} Tidak Boleh Kosong'
        ]
        ],
         'password' => [
        'label'  => 'Password',
        'rules'  => 'required',
        'errors' => [
        'required' => '{field} Tidak Boleh Kosong'
        ]
        ],
        ]
        );

        if (!$validate) {
            $msg = [
            'error' => [
            'email' => $this->validate->getError('email'),
            'password' => $this->validate->getError('password')
            ]
            ];
            return redirect()->to(base_url('auth'));
        }else{
            $email   = $this->request->getPost('email');
            $password    = $this->request->getPost('password');
            $user = $this->ModelUser->CheckLogin($email);
            if ($user) {
                // Cek Apakah is_ctive=1 akun aktif
                if ($user->is_active==1) {
                    $is_valid = password_verify($password, $user->password);
                    // cek password jika valid
                    if ($is_valid) {
                        // buat session user login 
                        $new_session = ['admins_ses' => intval($user->id)];
                        session()->set($new_session);
                        $msg = ['sukses'=> 200];
                        return redirect()->to(base_url('admin'));

                    }else{
                        $msg = ['error'=> ['password'=> 'Password Tidak Benar']];
                        return redirect()->to(base_url('auth'));
                    }
                }else{
                    // pesan jika Akun tidak aktif 
                    $msg = ['error'=> ['email'=> 'Akun Tidak Aktif']];
                    return redirect()->to(base_url('auth'));

                }
            }else{
                // jika email tidak ada 
            $msg = ['error'=> ['email'=> 'Email Belum Terdaftar.']];
            return redirect()->to(base_url('auth'));
            }
        

        }
       
       
    
    
    }
}
