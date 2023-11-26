<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Users extends BaseController
{
    public function index()
    {
        $data = ['title'=> 'Dashboard'];
       return view('Admin/Dashboard', $data);
    }
}
