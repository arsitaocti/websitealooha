<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        $UserModel = new UserModel();
        
        $user = $UserModel->findAll();
        $userid=1;
        return view('profil', ['user' => $user]);
    }

    public function updateProfilPicture()
    {
        $this->userModel = new UserModel();

        $profilePicture = $this->request->getFile('profil_picture');
        if ($profilePicture->isValid() && !$profilePicture->hasMoved()) {
            $newName = $profilPicture->getRandomName();
            $profilPicture->move(ROOTPATH . 'public/uploads/profile_pictures', $newName);

            $userModel->update($userId, ['profil_picture' => $newName]);
        }

        return redirect()->to('/profile');
    }
}