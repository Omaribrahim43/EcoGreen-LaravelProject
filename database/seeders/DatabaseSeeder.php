<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
public function run(){// \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UserSeeder::class);

        $this->call([
            Category::class,
        ]);
        $this->call([
            Admin::class,
        ]);
        $this->call([
            ProjectSeeder::class,
        ]);
    }
}