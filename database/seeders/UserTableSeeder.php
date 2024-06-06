<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {
        $data = [
            [
                'name' => 'Stefano',
                'phone_number' => '876543234567'
            ],
            [
                'name' => 'Fabiola',
                'phone_number' => '876543234567'
            ],
            [
                'name' => 'Paolo',
                'phone_number' => '876543234567'
            ],
            [
                'name' => 'Ugo',
                'phone_number' => '876543234567'
            ],
            [
                'name' => 'Sofia',
                'phone_number' => '876543234567'
            ],

            ];

            foreach ($data as $user) {
                $new_user = new User();
                $new_user->name = $user['name'];
                $new_user->phone_number = $user['phone_number'];
                $new_user->save();

            }
    }
}
