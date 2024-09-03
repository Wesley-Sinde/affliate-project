<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commission;

class CommissionFactory extends Factory
{
    protected $model = Commission::class;

    public function definition()
    {
        return [
            'affiliate_id' => \App\Models\Affiliate::factory(),
            'amount' => $this->faker->randomFloat(2, 5, 100),
            'status' => $this->faker->randomElement(['pending', 'paid']),
        ];
    }
}
