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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->required();
            $table->string('domain_type')->nullable(); // .com, .net, .org, etc.
            $table->string('company_name')->nullable();
            $table->text('notes')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('ipa_number')->nullable();
            $table->string('status')->default('new'); // new, active, inactive      

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
