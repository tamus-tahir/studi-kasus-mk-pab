<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostCategory::create([
            'title' => 'Pemerintahan Desa',
            'slug' => 'pemerintahan-desa',
        ]);
        PostCategory::create([
            'title' => 'Pembangunan Dan Infrastuktur',
            'slug' => 'pembangunan-dan-infrastuktur',
        ]);
    }
}
