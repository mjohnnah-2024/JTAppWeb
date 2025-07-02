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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->required();
            $table->string('lastname')->required();
            $table->string('query')->required(); // e.g., 'domain registration', 'hosting plan', etc.
            $table->string('email')->required();
            $table->text('message')->required(); // The message or query from the user

            // You can add additional fields if needed, such as phone number, etc.
            // $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
