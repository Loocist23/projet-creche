<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            OwnerSeeder::class,
            PersonnelSeeder::class,
            EnfantSeeder::class,
            MenuSeeder::class,
            PlanningSeeder::class,
            NewsSeeder::class,
            JourneeEnfantSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
