<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        Category::create([
            'category_name' => '質問', // カテゴリー名
        ]);
        Category::create([
            'category_name' => '要望', // カテゴリー名
        ]);
        Category::create([
            'category_name' => '相談', // カテゴリー名
        ]);
    }
}
