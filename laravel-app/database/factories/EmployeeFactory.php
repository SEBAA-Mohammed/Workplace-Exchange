<?php

namespace Database\Factories;

use App\Models\Establishment;
use App\Models\Occupation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => fake()->unique()->randomNumber(),
            'nom' => fake()->lastName,
            'prenom' => fake()->firstName,
            'photo' => fake()->lastName,
            'grade' => fake()->randomElement(['A', 'B', 'C']),
            'date_naissance' => fake()->date(),
            'date_recrutement' => fake()->date(),
            'poste' => fake()->jobTitle,
            'tel' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail,
            'password' => bcrypt('password'),
            'occupation_id' => Occupation::inRandomOrder()->first()->id,
            'establishment_id' => Establishment::inRandomOrder()->first()->id
        ];
    }
}
