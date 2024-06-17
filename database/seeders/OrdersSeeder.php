<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
	 * @return void
     */
    public function run()
    {
        DB::table('Orders') -> insert([
			[
				'customer_id' =>  1,
				'package_id' => 1,
				'order_date' => '2024-06-10',
				'status' => 'Pending'
			],
			[
				'customer_id' =>  2,
				'package_id' => 2,
				'order_date' => '2024-06-11',
				'status' => 'Approved'
			]
		]);
    }
}
