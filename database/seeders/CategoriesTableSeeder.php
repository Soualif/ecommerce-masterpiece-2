<?php

namespace Database\Seeders;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Handy',
                'slug' => 'handy',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Tablet',
                'slug' => 'tablet',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Computer',
                'slug' => 'computer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Divers',
                'slug' => 'divers',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
