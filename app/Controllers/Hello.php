<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Hello extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function home()
    {
        return view('product/Home');
    }
}


