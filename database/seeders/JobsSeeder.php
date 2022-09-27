<?php

namespace Database\Seeders;

use App\Models\jobsboards;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jobsboards::factory()->count(100)->create();
    }
}
