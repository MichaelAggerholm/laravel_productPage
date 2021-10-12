<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@aggerholm.com',
                'is_admin' => '1',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'User',
                'email' => 'normal@aggerholm.com',
                'is_admin' => '0',
                'password' => bcrypt('admin123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
