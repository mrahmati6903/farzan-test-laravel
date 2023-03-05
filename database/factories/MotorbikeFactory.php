<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motorbike>
 */
class MotorbikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => fake()->name(),
            'color'  => fake()->colorName(),
            'weight' => fake()->numberBetween(50, 150),
            'price'  => fake()->numberBetween(1000, 10000),
            'image'  => null
        ];
    }
}
