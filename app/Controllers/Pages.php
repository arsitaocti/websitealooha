<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
      return view ('product/index');
      
    }

    public function about ()

    {
        echo view ('pages/about');
        echo view('pages/about');
        echo view('layout/footer');
    }
}