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
        Schema::create('OrderDetails', function (Blueprint $table) {
			$table -> id('order_detail_id');
			$table -> integer('quantity');
			$table -> unsignedBigInteger('order_id');
            $table -> unsignedBigInteger('package_id');

			$table -> foreign('order_id') -> references('order_id') -> on('Orders');
			$table -> foreign('package_id') -> references('package_id') -> on('WeddingPackages');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('OrderDetails');
    }
};
