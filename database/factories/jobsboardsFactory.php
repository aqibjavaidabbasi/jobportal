<?php

namespace Database\Factories;

use App\Models\AboutCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jobsboards>
 */
class jobsboardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => AboutCompany::inRandomOrder()->first()->id,
            'location' => $this->faker->city,
            'title' => $this->faker->jobTitle,
            'jobd' => $this->faker->text,
            'category' => $this->faker->randomElement(['it', 'marketing', 'sales', 'accounting']),
            'jobt' => $this->faker->randomElement(['full-time', 'part-time', 'freelance']),
            'qf' => $this->faker->randomElement(['bachelor', 'master', 'phd']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'vacancy' => 10,
            'salary' => 10000,
            'ad' => $this->faker->date,
            'joind' => $this->faker->date,

        ];
    }
}
