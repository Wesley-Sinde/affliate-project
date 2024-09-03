<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Referral;

class ReferralFactory extends Factory
{
    protected $model = Referral::class;

    public function definition()
    {
        return [
            'affiliate_id' => \App\Models\Affiliate::factory(),
            'name' => $this->faker->name,
            'status' => $this->faker->randomElement(['pending', 'converted']),
        ];
    }
}
