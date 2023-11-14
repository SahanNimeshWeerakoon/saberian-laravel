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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id')->references('id')->on('vendors');
            $table->index('vendor_id');
            $table->unsignedBigInteger('branch_manager_id')->references('id')->on('branch_managers');
            $table->index('branch_manager_id');
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 9, 3);
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
