<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\MSiswa;
use App\Models\MSekolah;
use App\Models\MPeriode;
class Siswa extends BaseController
{
function __construct()
{
$this->Msiswa = new MSiswa();
$this->Msekolah = new MSekolah();
$this->Mperiode = new MPeriode();
}
public function index()
{
$data = [
'title'=> 'Siswa'
];
return view('Admin/Siswa/index', $data);
}

public function ListSiswa()
{
   if ($this->request->isAJAX()) {
    $data = ['data'=> $this->Msiswa->findAll()];
    $msg = ['view'=> view('Admin/Siswa/list_siswa',$data)];
    echo json_encode($msg);
   }

}


public function Add()
{
    if ($this->request->isAJAX()) {
        $data = [
            'sekolah'=> $this->Msekolah->findAll(),
            'periode'=> $this->Mperiode->findAll()
        ];
        $view = ['view'=> view('Admin/Siswa/add',$data)];
        echo json_encode($view);
    }
}


    public function PreviewCSV()
    {
    if ($this->request->isAJAX()) {
    $this->validate= \Config\Services::validation();
    $validation = $this->validate([
    'file_nya'  => [
    'label'     => 'File',
    'rules'     => 'uploaded[file_nya]|ext_in[file_nya,csv]',
    'errors'    => [
    'uploaded'  => '{field} Harus di Isi',
    'ext_in'    => '{field} Extensi yang dizinkan hanya .csv'
    ]
    ],
    'sekolah'  => [
    'label'     => 'Sekolah',
    'rules'     => 'required',
    'errors'    => [
    'required'  => '{field} Harus di Isi',
    ]
    ]
    ,
    'periode'  => [
    'label'     => 'Periode',
    'rules'     => 'required',
    'errors'    => [
    'required'  => '{field} Harus di Isi',
    ]
    ]

    ]);
    if (!$validation) {
    $msg = ['error'=> [
    'file_nya'=> $this->validate->getError('file_nya'),
    'sekolah'=> $this->validate->getError('sekolah'),
    'periode'=> $this->validate->getError('periode')
    ]];

    }else{

    $files         = $this->request->getFile('file_nya');
    $file_ext      = $files->getExtension();
    $newName       = $files->getRandomName();
    $set_file_name = $newName;  
    $path = ROOTPATH.'/tmp/'; 
    // pindahkan file pada folder 
    $files->move($path, $set_file_name);
    $dataset_active = $set_file_name; // nama field yang aktif
    $path           = ROOTPATH.'/tmp/'.$dataset_active; // panggil file pada folder sesuai dengan data yang aktif
    $file           = fopen($path, 'r'); // membaca file csv pada folder berdasrkan dataset aktif
    $first_line     = str_getcsv(fgets($file));
    $jml_sample = count($first_line)-1; 
    $table = [
    'file_nya'=> $set_file_name,  
    'sekolah_id'=> $this->request->getVar('sekolah'),
    'periode_id'=> $this->request->getVar('periode'),  
    'first_line'=> $first_line,
    'jml_sample'=> $jml_sample,
    'file'=> $file
    ];
    $msg = [
    'sample'=> view('Admin/Siswa/Preview', $table)
    ]; 
    }
    echo json_encode($msg); 

    }
    }

    public function Upload()
    {
    if ($this->request->isAJAX()) {
    $this->validate= \Config\Services::validation();
    $validation = $this->validate([
    'file_nya'  => [
    'label'     => 'File',
    'rules'     => 'required',
    'errors'    => [
    'required'  => '{field} Berkas CSV Tidak ditemukan, harap upoad ulang.',
    ]
    ]

    ]);
    if (!$validation) {
    $msg = ['error'=> [
    'file_nya'=> $this->validate->getError('file_nya')
    ]];

    }else{
    $file_nya = $this->request->getPost('file_nya');
    $path = ROOTPATH.'/tmp/'.$file_nya; 
    if (empty($path)) {
    $msg = ['error'=> 'Berkas CSV Tidak ditemukan, harap upload kembali.'];
    }else{

    $result = array();
    foreach ($_POST['nomor_surat'] as $key => $val) {
    $result[] = array(                 
    'sekolah_id' =>$this->request->getPost('sekolah_id'),
    'periode_id' =>$this->request->getPost('periode_id'), 
    'nomor_surat' =>$this->request->getPost('nomor_surat')[$key],
    'nisn' => $this->request->getPost('nisn[]')[$key],
    'nopes' => $this->request->getPost('nopes[]')[$key],
    'nama' => $this->request->getPost('nama[]')[$key],
    'tmp_lahir' => $this->request->getPost('tmp_lahir[]')[$key],
    'tgl_lahir' => $this->request->getPost('tgl_lahir[]')[$key],
    'jurusan' => $this->request->getPost('jurusan[]')[$key],
    'status' => $this->request->getPost('status[]')[$key],
    'img' => $this->request->getPost('img[]')[$key]  
    ); 
    }
    $rest= $this->Msiswa->insertBatch($result);
        if ($rest) {
        // Hapus File pad folder tmp
        unlink($path);
        $msg = ['sukses'=> 'Data Siswa Telah di Upload.'];
        }else{
        $msg = ['error'=> 'Gagal Upload Data.'];
        }
    }
    }

    echo json_encode($msg);

    }
    }

public function FormStatus()
{
    if ($this->request->isAJAX()) {
        $id = $this->request->getVar('id');
        $data = [
            'siswa'=> $this->Msiswa->Detail($id)
        ];
        $view = ['view'=> view('Admin/Siswa/status',$data)];
        echo json_encode($view);
    }
}

public function UpdateStatus()
{
    if ($this->request->isAJAX()) {
        $old_nomor_surat = $this->request->getPost('old_nomor_surat');
        $nomor_surat = $this->request->getPost('nomor_surat');
        $old_nisn = $this->request->getPost('old_nisn');
        $nisn = $this->request->getPost('nisn');

        // Custom Rules Nomor Surat
        if ($old_nomor_surat !==$nomor_surat) {
           $rule_nomor_surat = 'required|is_unique[tm_siswa.nomor_surat]';
        }else{
            $rule_nomor_surat = 'required';
        }

         // Custom Rules NISN
         if ($old_nisn !==$nisn) {
            $rule_nisn = 'required|is_unique[tm_siswa.nisn]';
         }else{
             $rule_nisn = 'required';
         }

        $this->validate= \Config\Services::validation();
        $validation = $this->validate([
        'nomor_surat'  => [
        'label'     => 'Nomor Surat',
        'rules'     => $rule_nomor_surat,
        'errors'    => [
        'required'  => '{field} Wajib di Isi',
        'is_unique'  => '{field} Telah digunakan',
        ]
        ],
        'nisn'  => [
        'label'     => 'NISN',
        'rules'     => $rule_nisn,
        'errors'    => [
        'required'  => '{field} Wajib di Isi',
        'is_unique'  => '{field} Telah digunakan',
        ]
        ]

        ]);
        if (!$validation) {
        $msg = ['error'=> [
        'nomor_surat'=> $this->validate->getError('nomor_surat'),
        'nisn'=> $this->validate->getError('nisn')
        ]];
    
        }else{
        $old_status = $this->request->getPost('old_status');
        $status = $this->request->getPost('status');
        $data = [
        'id'=> $this->request->getPost('id'),
        'nomor_surat'=> $this->request->getPost('nomor_surat'),
        'nisn'=> $this->request->getPost('nisn'),
        'nopes'=> $this->request->getPost('nopes'),
        'nama'=> $this->request->getPost('nama'),
        'tmp_lahir'=> $this->request->getPost('tmp_lahir'),
        'tgl_lahir'=> $this->request->getPost('tgl_lahir'),
        'jurusan'=> $this->request->getPost('jurusan'),
        'status'=> $status== "" ? $old_status : $status 
        ];

        if ($this->Msiswa->save($data)) {
        $msg = ['sukses'=> 'Data Diperbarui'];
        }else{
        $msg = ['error'=> 'Gagal Perbarui data.'];
        }

        }

 

        echo json_encode($msg);
    }
}

public function HapusSiswa()
{
   if ($this->request->isAJAX()) {
    $id = $this->request->getPost('id');
    if (!empty($this->Msiswa->find($id))) {
        $this->Msiswa->delete($id);
        $msg = ['sukses'=> 'Data telah dihapus'];
    }else{
       $msg = ['error'=> 'Delete Failed'];
    }
    echo json_encode($msg);

    
   }
}


}
