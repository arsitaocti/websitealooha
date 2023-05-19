<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Test',
            'email'    => 'test@mail.com',
            'password'    => md5("secret"),
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);

        $data = [
            'name' => 'jisoo',
            'email'    => 'arsitaofficial@gmail.com',
            'password'    => md5("jisoo222"),
        ];

        // Simple Queries
        $this->db->table('users')->insert($data);
    }
}

