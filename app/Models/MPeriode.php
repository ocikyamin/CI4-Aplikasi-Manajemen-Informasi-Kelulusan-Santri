<?php

namespace App\Models;

use CodeIgniter\Model;

class MPeriode extends Model
{
    protected $table            = 'periode';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

 

}
