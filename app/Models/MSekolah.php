<?php

namespace App\Models;

use CodeIgniter\Model;

class MSekolah extends Model
{
    protected $table            = 'sekolah';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = false;
    protected $allowedFields    = [];
}
