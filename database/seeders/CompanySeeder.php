<?php

namespace Database\Seeders;

use App\Models\AboutCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutCompany::factory()->count(50)->create();
    }
}
