<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admindashboard extends BaseController
{
    public function index()
    {
        
        return view('admin/dashboard');

    }
}
