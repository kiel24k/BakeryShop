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
            'amount' => '50000',
            'quantity' => 12,
            'reserved_product' =>fake()->name(),
            'first_name'  => fake()->name(),
            'last_name'  => fake()->name(),
            'contact_number'  => fake()->name(),
            'user_email'  => fake()->email(),
            'place'  => 'Solar Homes',
        ];
    }
}
