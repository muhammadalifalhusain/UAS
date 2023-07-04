<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Userdata extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'syahira',
                'role' => 'user',
                'password' => password_hash('syahira11', PASSWORD_DEFAULT),
                'is_aktif' => 'false',
            ],
            [
                'username' => 'hermione',
                'role' => 'user',
                'password' => password_hash('hermione', PASSWORD_DEFAULT),
                'is_aktif' => 'false',
            ]
        ];

        $this->db->table('user')->insertBatch($data);
    }
}