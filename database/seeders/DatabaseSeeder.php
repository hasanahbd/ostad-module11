<?php

namespace Database\Seeders;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Product::factory()->create([
            'name' => 'Rice',
            'price' => 10,
            'stock' => 10,
        ]);

        Product::factory()->create([
            'name' => 'Beans',
            'price' => 20,
            'stock' => 20,
        ]);

        Product::factory()->create([
            'name' => 'Yam',
            'price' => 30,
            'stock' => 30,
        ]);
    }
}
