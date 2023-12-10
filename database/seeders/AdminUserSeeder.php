<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminUser;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        AdminUser::create([
            'name' => 'owner',
            'email' => 'owner@example.com',
           'password' => bcrypt('admin1'),
            'admin_level' => 1,
        ]);
        
        AdminUser::create([
            'name' => 'sub',
            'email' => 'sub@example.com',
           'password' => bcrypt('admin2'),
            'admin_level' => 1,
        ]);
    }
}
