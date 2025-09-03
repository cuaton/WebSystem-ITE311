<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $data = [
            [
                'role'          => 'admin',
                'first_name'    => 'Jade',
                'last_name'     => 'Cuaton',
                'email'         => 'Jade@gmail.com',
                'password_hash' => password_hash('admin123', PASSWORD_DEFAULT),
            ],

            [
                'role'          => 'instructor',
                'first_name'    => 'Christian',
                'last_name'     => 'Bautista',
                'email'         => 'Christian@gmail.com',
                'password_hash' => password_hash('instructor123', PASSWORD_DEFAULT),
            ],

            [
                'role'          => 'student',
                'first_name'    => 'Wako',
                'last_name'     => 'Hodeyo',
                'email'         => 'Wako@gmail.com',
                'password_hash' => password_hash('student123', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}

