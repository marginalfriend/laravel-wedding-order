<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeddingPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('WeddingPackages')->insert([
            [
                'name' => 'Basic Package',
                'description' => 'Simple wedding package',
                'price' => 1500.00,
            ],
            [
                'name' => 'Premium Package',
                'description' => 'Comprehensive wedding package with extra services',
                'price' => 3000.00,
            ],
            [
                'name' => 'Deluxe Package',
                'description' => 'Exclusive wedding package with full services',
                'price' => 5000.00,
            ],
        ]);
    }
}
