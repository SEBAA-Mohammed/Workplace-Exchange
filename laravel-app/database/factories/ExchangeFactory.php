<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exchange>
 */
class ExchangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'valide' => fake()->boolean(),
            'city_id' => City::inRandomOrder()->first()->id,
            'employee_id' => Employee::inRandomOrder()->first()->id
        ];
    }
}
