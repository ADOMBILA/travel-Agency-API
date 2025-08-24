<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Database\Seeders\TourSeeder;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
 $this->call([

        RoleSeeder::class,

        TravelSeeder::class,
        TourSeeder::class,
    ]);
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'editor']);

        
    }
}
