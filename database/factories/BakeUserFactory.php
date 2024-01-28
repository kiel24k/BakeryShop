<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BakeUser>
 */
class BakeUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'  => fake()->name(),
            'middle_name'  => fake()->name(),
            'last_name'  => fake()->name(),
            'place'  => 'Solar Homes',
            'contact_number'  => fake()->name(),
            'block'  => fake()->name(),
            'lot' => fake()->name(),


        ];
    }
}
