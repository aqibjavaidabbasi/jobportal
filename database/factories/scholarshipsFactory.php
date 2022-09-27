<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\scholarships>
 */
class scholarshipsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Fulbright Scholarship Program',
                'DAAD Scholarship Program',
                'Excelsior Scholarship',
                'Chevening Scholarship',
                'Commonwealth Scholarship',
                'Erasmus Mundus Scholarship',
                'Rotary Foundation Scholarship',
                'DAAD Scholarship Program',
                'The Coca-Cola Scholarship',
                'The Gates Millennium Scholarship',
                'Fullbright Scholarship Program',
            ]),
            'title' => $this->faker->name,
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
