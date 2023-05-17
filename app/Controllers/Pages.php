<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      echo view('layout/Home'); 
      echo view('pages/Home');
      echo view('layout/footer');
    }

    public function about ()

    {
        echo view ('pages/about');
        echo view('pages/about');
        echo view('layout/footer');
    }
}