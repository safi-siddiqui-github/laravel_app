<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $guest = new User();
        $guest->email = 'lara-guest@gmail.com';
        $guest->name = 'Lara Guest';
        $guest->nickname = 'lara-guest';
        $guest->avatar = 'lara-guest.png';
        $guest->save();
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
