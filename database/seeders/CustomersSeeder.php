<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Customers') -> insert([
			[
				'name' => 'John Doe',
				'email' => 'john@example.com',
				'phone' => '555-1234'
			],
			[
				'name' => 'Jane Smith',
				'email' => 'jane@example.com',
				'phone' => '555-5678'
			],
		]);
    }
}
