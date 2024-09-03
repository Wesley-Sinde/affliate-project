<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Affiliate;

class AffiliateSeeder extends Seeder
{
    public function run()
    {
        Affiliate::factory()->count(10)->create();
    }
}
