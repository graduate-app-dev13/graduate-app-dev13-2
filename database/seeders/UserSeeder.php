<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ユーザーの登録
     */
    public function run(): void
    {
        //
         User::create([
            'school_id' => 1,
            'name' => '河田',
            'email' => 'work.kawata@gmail.com',
            'password' => bcrypt('5656'),
            'email_verified_at' => now()
        ]);


    }
}
