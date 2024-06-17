<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
			$table -> id('order_id');
			$table -> foreign('customer_id') -> references('customer_id') -> on('customers');
			$table -> foreign('package_id') -> references('package_id') -> on('wedding_packages');
			$table -> enum('status'. ['Pending', 'Approved', 'Cancelled']) -> default('Pending');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
