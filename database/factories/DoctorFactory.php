<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'contactPersonName' => fake()->name(),
            'contactPersonPhone' => fake()->unique()->phoneNumber(),
            'designation' => fake()->name(),
            'city' => fake()->city(),
            'state' => fake()->streetAddress(),
            'country' => fake()->country(),
            'photo' => fake()->name(),
            'visitingCard' => fake()->name(),
            'background' => fake()->name(),
            'experience' => fake()->name(),
            'expertise' => fake()->name(),
            'awarded' => fake()->name(),
            'presentWorkStation' => fake()->name(),
            'previousWorkStation' => fake()->name(),
            'extraOrdinary' => fake()->name(),
            'publication' => fake()->name(),
            'ranking' => fake()->name(),
            'btoBStatus' => fake()->name(),
            'locationMap' => fake()->name(),
        ];
    }
}
