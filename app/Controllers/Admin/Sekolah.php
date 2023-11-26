<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\MSekolah;
class Sekolah extends BaseController
{
    function __construct()
    {
        $this->Msekolah = new MSekolah();
    }
    public function index()
    {
        $data = [
            'title'=> 'Sekolah',
            'data'=> $this->Msekolah->findAll()
        ];
       return view('Admin/Sekolah/index', $data);
    }
}
