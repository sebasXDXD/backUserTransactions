<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = [1, 2];
        $userId = $this->faker->randomElement($userIds);
        return [
            'user_id' => $userId,
            'descripcion' => $this->faker->sentence,
            'valor' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
