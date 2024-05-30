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
        Schema::create('medicine', function (Blueprint $table) {
            $table->id('medicine_id');
            $table->unsignedBigInteger('id')->nullable();
            $table->unsignedBigInteger('SupplierID')->nullable();
            $table->string('MedicineName')->nullable();
            $table->string('GenericName')->nullable();
            $table->string('BrandName')->nullable();
            $table->string('DrugClass')->nullable();
            $table->float('Price')->nullable();
            $table->string('Manufacturer')->nullable();
            $table->integer('Dosage')->nullable();
            $table->integer('QuantityStock')->nullable();
            $table->date('ManufactureDate')->nullable();
            $table->date('ExpirationDate')->nullable();
            $table->string('image')->nullable();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('supplier')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine');
    }
};
