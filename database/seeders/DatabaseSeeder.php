<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserLevelSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VendorSeeder;
use Database\Seeders\BranchManager;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserLevelSeeder::class,
            UserSeeder::class,
            VendorSeeder::class,
            BranchManager::class,
            ProductSeeder::class
        ]);
    }
}
