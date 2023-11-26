<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\MPeriode;
class Periode extends BaseController
{
    function __construct()
    {
        $this->Mperiode= new MPeriode();
    }
    public function index()
    {
    $data = [
    'title'=> 'Periode'
    ];
    return view('Admin/Periode/index', $data);
    }

    public function ListPeriode()
    {
      if ($this->request->isAJAX()) {
        $periode = ['periode'=> $this->Mperiode->findAll()];
        $data = ['view'=> view('Admin/Periode/list_periode', $periode)];
        echo json_encode($data);
      }
    }


    public function Add()
    {
        if ($this->request->isAJAX()) {
            $data = ['view'=> view('Admin/Periode/add')];
            echo json_encode($data);
        }
    }
}
