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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('codigo'); // Primary key
            $table->string('nombre', 100); // Product name
            $table->decimal('precio', 10, 2); // Product price
            $table->unsignedBigInteger('codigo_fabricante'); // Foreign key to fabricantes table
            $table->foreign('codigo_fabricante')->references('codigo')->on('fabricantes')->onDelete('cascade'); // Foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
