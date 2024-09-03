<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referral;

class ReferralSeeder extends Seeder
{
    public function run()
    {
        Referral::factory()->count(30)->create();
    }
}
