<?php

namespace Database\Factories;

use App\Models\AboutCompany;
use App\Models\jobsboards;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    protected $model = jobsboards::class;
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
            'gender' => $this->faker->rendomElement(['Male', 'Female']),
            'vacancy' => $this->faker->rendom(),
            'salary' => $this->faker->rendom(),
            'ad' => $this->faker->rendom(),
            'joind' => $this->faker->rendom(),

        ];
    }
}
