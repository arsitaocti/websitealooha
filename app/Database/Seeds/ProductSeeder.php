<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'arss',
            'email'    => 'arsitaofficial@gmail.com',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
