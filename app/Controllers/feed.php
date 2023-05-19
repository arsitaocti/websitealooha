<?php

namespace App\Controllers;

use App\Models\PostModel;

class Feed extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();
        $posts = $postModel->findAll();

        return view('feed', ['posts' => $posts]);
    }

    public function createPost()
    {
        $postModel = new PostModel();

        $rules = [
            'status' => 'required',
            'photo'  => 'uploaded[photo]|max_size[photo,2048]|mime_in[photo,image/jpeg,image/png]'
        ];

        if ($this->validate($rules)) {
            $status = $this->request->getPost('status');
            $photo = $this->request->getFile('photo');

            // Simpan foto ke folder yang sesuai
            $newName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/uploads/posts', $newName);

            // Simpan postingan ke database
            $data = [
                'status' => $status,
                'photo'  => $newName
            ];
            $postModel->insert($data);
        } else {
            // Jika validasi gagal, tampilkan pesan kesalahan
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        return redirect()->to('/feed');
    }
}
