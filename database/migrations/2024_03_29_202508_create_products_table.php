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
            $table->string('name');
            $table->string('description');
            $table->double('weight', 8, 2);
            $table->double('amount', 8, 2);
            $table->double('price', 8, 2);
            $table->double('total',8, 2);

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('supplier_id');
            $table->timestamps();

            // constraint
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('supplier_id')->references('id')->on('suppliers');

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
