<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ユーザー教員の登録
     */
    public function run(): void
    {
        //
         User::create([
            'school_id' => 1, // 学校IDを指定
            'name' => '河田', // 先生名
            'email' => 'work.kawata@gmail.com', // メールアドレス
            'password' => bcrypt('5656'), // パスワードをハッシュ化
            'email_verified_at' => now() // メールの確認用タイムスタンプを設定
        ]);
         
        
        User::create([
            'school_id' => 2, // 学校IDを指定
            'name' => 'テストユーザー２', // 先生名
            'email' => 'user2@example.com', // メールアドレス
            'password' => bcrypt('1111'), // パスワードをハッシュ化
            'email_verified_at' => now() // メールの確認用タイムスタンプを設定
        ]);
        
        User::create([
            'school_id' => 40, // 学校IDを指定
            //'school_number' => 0040, // 学校IDを指定
            'name' => '奥膳', // 先生名
            'email' => 'okuzen@example.com', // メールアドレス
            'password' => bcrypt('4001'), // パスワードをハッシュ化
            'email_verified_at' => now() // メールの確認用タイムスタンプを設定
        ]);
        
         User::create([
            'school_id' => 40, // 学校IDを指定
             //'school_number' => 0040, // 学校IDを指定
             'name' => '山中', // 先生名
             'email' => 'yamanaka@example.com', // メールアドレス
             'password' => bcrypt('4002'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 40, // 学校IDを指定
             //'school_number' => 0040, // 学校IDを指定
             'name' => '椎木', // 先生名
             'email' => 'shiinoki@example.com', // メールアドレス
             'password' => bcrypt('4003'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 108, // 学校IDを指定
             //'school_number' => 0111, // 学校IDを指定
             'name' => '石松', // 先生名
             'email' => 'ishimatsu@example.com', // メールアドレス
             'password' => bcrypt('1112'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 108, // 学校IDを指定
            //'school_number' => 0111, // 学校IDを指定
             'name' => '宮下', // 先生名
             'email' => 'miyashita@example.com', // メールアドレス
             'password' => bcrypt('1113'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 120, // 学校IDを指定
            //'school_number' => 0123, // 学校IDを指定
             'name' => '平井', // 先生名
             'email' => 'hirai@example.com', // メールアドレス
             'password' => bcrypt('1231'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 76, // 学校IDを指定
            //'school_number' => 0078, // 学校IDを指定
             'name' => '上原', // 先生名
             'email' => 'uehara@example.com', // メールアドレス
             'password' => bcrypt('7801'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
         User::create([
             'school_id' => 76, // 学校IDを指定
            //'school_number' => 0078, // 学校IDを指定
             'name' => '財津', // 先生名
             'email' => 'zaitsu@example.com', // メールアドレス
             'password' => bcrypt('7802'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);
        
          User::create([
             'school_id' => 85, // 学校IDを指定
             //'school_number' => 0087, // 学校IDを指定
             'name' => '井上', // 先生名
             'email' => 'inoue@example.com', // メールアドレス
             'password' => bcrypt('8701'), // パスワードをハッシュ化
             'email_verified_at' => now() // メールの確認用タイムスタンプを設定
         ]);

    }
}
