<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $userModel = new UserModel();
        $userId = Jane_Doe; 
        $user = $userModel->find($userId);

        if ($user) {
            return view('profile', ['user' => $user]);
        } else {
            return 'Pengguna tidak ditemukan.';
        }
    }
}
=======

   
>>>>>>> 499d2465ef258e68fa13ad5937916d9f7db06d21
