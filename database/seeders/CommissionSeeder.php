<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commission;

class CommissionSeeder extends Seeder
{
    public function run()
    {
        Commission::factory()->count(20)->create();
    }
}
