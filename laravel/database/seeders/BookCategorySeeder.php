<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Database\Factories\BookCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::factory()->count(100)->create();
    }
}
