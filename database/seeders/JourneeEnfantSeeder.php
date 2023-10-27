<?php

namespace Database\Seeders;

use App\Models\Enfant;
use App\Models\JourneeEnfant;
use App\Models\Menu;
use App\Models\Personnel;
use App\Models\Planning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JourneeEnfantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JourneeEnfant::factory(10)
            ->has(Menu::factory()->count(1))
            ->has(Planning::factory()->count(1))
            ->create();
    }
}
