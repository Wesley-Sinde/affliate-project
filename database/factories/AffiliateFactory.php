<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Affiliate;

class AffiliateFactory extends Factory
{
    protected $model = Affiliate::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'referral_code' => Str::upper(Str::random(6)),
        ];
    }
}
