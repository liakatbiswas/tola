<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'phone'=>fake()->unique()->phoneNumber(),
            'email'=>fake()->unique()->safeEmail(),
            'type'=>fake()->name(),
            'isBranch'=>fake()->boolean(),
            'city'=>fake()->city(),
            'state'=>fake()->streetAddress(),
            'country'=>fake()->country(),
            'ranking'=>fake()->name(),
            'costRang'=>fake()->name(),
            'btoBStatus'=>fake()->name(),
            'locationMap'=>fake()->name(),

        ];
    }
}
