<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $userId = Jane_Doe; 
        $user = $userModel->find($userId);

        return view('profile', ['user' => $user]);
    }

    public function updateProfilePicture()
    {
        $userId = Jane_Doe; // Ganti dengan ID pengguna yang sedang aktif
        $userModel = new UserModel();

        // Validasi dan simpan foto profil yang diunggah
        $profilePicture = $this->request->getFile('profile_picture');
        if ($profilePicture->isValid() && !$profilePicture->hasMoved()) {
            // Pindahkan foto profil ke folder yang sesuai
            $newName = $profilePicture->getRandomName();
            $profilePicture->move(ROOTPATH . 'public/uploads/profile_pictures', $newName);

            // Perbarui foto profil pengguna dalam database
            $userModel->update($userId, ['profile_picture' => $newName]);
        }

        return redirect()->to('/profile');
    }
}
