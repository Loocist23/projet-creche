<?php

namespace Database\Seeders;

use App\Models\Enfant;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnfantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enfant::factory(10)->create();
    }
}
