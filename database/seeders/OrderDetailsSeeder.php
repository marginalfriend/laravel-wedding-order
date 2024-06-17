<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('OrderDetails') -> insert([
			[
				'order_id' => 1,
				'package_id' => 1,
				'quantity' => 1,
			],
			[
				'order_id' => 2,
				'package_id' => 2,
				'quantity' => 1,
			],
		]);
    }
}
