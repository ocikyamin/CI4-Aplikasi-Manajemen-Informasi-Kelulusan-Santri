<?php

namespace App\Models;

use CodeIgniter\Model;

class MSiswa extends Model
{

    protected $table            = 'tm_siswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = [];

public function CekNISN($nisn = null)
{
    return $this->db->table('tm_siswa')
    ->join('sekolah','tm_siswa.sekolah_id=sekolah.id')
    ->join('periode','tm_siswa.periode_id=periode.id')
    ->where('tm_siswa.nisn', $nisn)
    ->get()->getRow();
}

public function Detail($id = null)
{
    return $this->db->table('tm_siswa')
    ->select('tm_siswa.*,sekolah.nama_sekolah,periode.periode_tahun')
    ->join('sekolah','tm_siswa.sekolah_id=sekolah.id')
    ->join('periode','tm_siswa.periode_id=periode.id')
    ->where('tm_siswa.id', $id)
    ->get()->getRow();
}

}
