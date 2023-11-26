<?php

namespace App\Controllers;
use App\Models\MSiswa;
use App\Models\MPeriode;

class Home extends BaseController
{
function __construct()
{
$this->ModelSiswa = new MSiswa();
$this->ModelPeriode = new MPeriode();
}

public function index()
{
$data = ['period'=> $this->ModelPeriode->where('status_info',1)->findAll() ];
return view('Landing', $data);
}

public function CekStatus()
{
$nisn = $this->request->getPost('nisn');
if ($nisn=="") {
$msg = ['err'=> ['nisn'=>'NISN / No.BP Harus diisi.'] ];
}else{
$data = $this->ModelSiswa->CekNISN($nisn);
if ($data) {
$siswa = ['info'=> $data];
$msg = ['view'=> view('Result', $siswa)]; 
}else{
$msg = ['err'=> ['nisn'=>'NISN / No.BP tidak ditemukan. Pastikan NISN/No.BP yang di masukkan benar'] ];
}

}
echo json_encode($msg);
}



}
