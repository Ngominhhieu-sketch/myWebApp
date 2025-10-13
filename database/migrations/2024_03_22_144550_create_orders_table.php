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
            $table->id();
            $table->string('book_name');
            $table->tinyInteger('copies_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable(false);
            $table->string('payment_method');
            $table->string('credit_number')->nullable(false); 
            

            $table->timestamps();
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
