<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ScholarshipFactory extends Factory
{
    protected $model = \App\Models\scholarships::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->scholarshipTitle,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'field' => $this->faker->randomElement(['it', 'marketing', 'sales', 'accounting']),
            'NOS' => $this->faker->randomElement(['bachelor', 'master', 'phd']),
            'tg' => $this->faker->text,
            'inclusions' => $this->faker->text,
            'eligibility' => $this->faker->text,
            'instructions' => $this->faker->text,
            'deadline' => $this->faker->date,
            'joining_date' => $this->faker->date,
            'address' => $this->faker->address,
        ];
    }
}
