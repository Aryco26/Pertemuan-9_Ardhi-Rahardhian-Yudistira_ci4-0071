<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Ardhi',
            'password'    => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap'    => 'Ardhi Rahardhian Yudistira',
            'email'    => 'ardhi@gmail.com',
        ];
        $this->db->table('user')->insert($data);
    }
}
