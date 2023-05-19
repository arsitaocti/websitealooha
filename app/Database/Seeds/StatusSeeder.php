<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'photo' => 'photo.jpeg',
            'link'    => 'utlities',
            'status'    => 'text',
            
        ];

        // Simple Queries
        $this->db->table('story')->insert($data);
        
        
    }
}
