<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama'  => 'Admin',
            'username'  => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('12345678', PASSWORD_BCRYPT),
            'hp'    => '089100100100',
            'foto'    => 'admin.png',
            'alamat'    => 'Jawa Tengah',
        ];

        $this->db->table('tbusers')->insertBatch($data);
    }
}
