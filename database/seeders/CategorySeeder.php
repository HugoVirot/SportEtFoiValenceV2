<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'inscriptions'
        ]);

        Category::create([
            'name' => 'tournois'
        ]);

        Category::create([
            'name' => 'actualités'
        ]);

        Category::create([
            'name' => 'vie de l\'association'
        ]);
    }
}
