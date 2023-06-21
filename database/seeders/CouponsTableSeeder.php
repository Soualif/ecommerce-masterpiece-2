<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::create([
            'code'  => 'NEW2023',
            'value' => 2
        ]);

        Coupon::create([
            'code'  => 'BLACKCOUPON',
            'value' => 1
        ]);

        Coupon::create([
            'code'  => 'BESTCOUPON',
            'value' => 5
        ]);
    }
}
