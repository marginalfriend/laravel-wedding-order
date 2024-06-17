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
		$this->down();
        Schema::create('Orders', function (Blueprint $table) {
			$table -> id('order_id');
			$table -> date('order_date');
			$table -> unsignedBigInteger('customer_id');
            $table -> unsignedBigInteger('package_id');
			$table -> enum('status', ['Pending', 'Approved', 'Cancelled']) -> default('Pending');

			$table -> foreign('customer_id') -> references('customer_id') -> on('Customers');
			$table -> foreign('package_id') -> references('package_id') -> on('WeddingPackages');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Orders');
    }
};
