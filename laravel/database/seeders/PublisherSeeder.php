<?php

namespace Database\Seeders;

use App\Models\publisher;
use Database\Factories\PublisherFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publisher::Factory()->count(25)->create();
    }
}
