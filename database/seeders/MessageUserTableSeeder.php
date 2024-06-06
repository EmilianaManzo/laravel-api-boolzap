<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 100 ; $i++) {
            $message = Message::inRandomOrder()->first();
            $user_id = User::inRandomOrder()->first()->id;
            $message->users()->attach($user_id);

        }
    }
}
