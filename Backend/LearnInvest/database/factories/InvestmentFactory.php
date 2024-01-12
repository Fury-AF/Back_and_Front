<?php

namespace Database\Factories;

use App\Models\Investor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investment>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'investor_id' => Investor::factory(), 
            'investment_name' => $this->faker->words(3, true),
            'amount' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
