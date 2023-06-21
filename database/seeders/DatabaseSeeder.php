<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CouponsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
    }
}
