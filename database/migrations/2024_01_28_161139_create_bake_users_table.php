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
        Schema::create('bake_users', function (Blueprint $table) {
            $table->id();
            $table->string('reserved_product');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact_number');
            $table->string('user_email');
            $table->integer('quantity');
            $table->float('amount', 8, 2);;
            $table->enum('place', ['Solar Homes','City Homes']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bake_users');
    }
};
