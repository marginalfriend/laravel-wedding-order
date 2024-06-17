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
        Schema::create('WeddingPackages', function (Blueprint $table) {
			$table -> id('package_id');
			$table -> string('name');
			$table -> text('description');
			$table -> decimal('price');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('WeddingPackages');
    }
};
