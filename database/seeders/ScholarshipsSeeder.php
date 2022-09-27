<?php

namespace Database\Seeders;

use App\Models\scholarships;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        scholarships::factory()->count(100)->create();
    }
}
