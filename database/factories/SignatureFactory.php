<?php

namespace Database\Factories;

use App\Enums\SignatureStatus;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Signature>
 */
class SignatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory(),
            'plan_id' => fake()->numberBetween(1,5),
            'status' => fake()->randomElement(SignatureStatus::cases()),
        ];
    }
}
