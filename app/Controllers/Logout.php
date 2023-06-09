<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('id');
        $session->remove('name');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Welcome this ur home!!');

        return redirect()->to('/login');
    }
}