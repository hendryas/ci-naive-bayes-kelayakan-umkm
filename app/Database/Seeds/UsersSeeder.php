<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $users = [
            [
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'username' => 'staff',
                'email'    => 'staff@example.com',
                'password' => password_hash('staff123', PASSWORD_DEFAULT),
                'role'     => 'staff',
            ],
        ];

        foreach ($users as $user) {
            $userModel->insert($user);
        }
    }
}
