<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\AnnouncementSeeder;

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
            CategorySeeder::class
        ]);


        \App\Models\User::create([
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('1234abcd'),
            'email_verified_at' => now(),
            'is_admin' => true,
            'is_revisor' => true,
        ]);

        \App\Models\User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('1234abcd'),
            'email_verified_at' => now(),
            'is_admin' => false,
            'is_revisor' => false,
        ]);

        \App\Models\User::create([
            'name' => 'revisor',
            'email' => 'revisor@gmail.com',
            'password' => Hash::make('1234abcd'),
            'email_verified_at' => now(),
            'is_admin' => false,
            'is_revisor' => true,
        ]);

        // $this->call([
        //     AnnouncementSeeder::class
        // ]);
        
    }
}
