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
        Schema::create('sign_ups', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->bigInteger('PhoneNumber');
            $table->string('Password');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_ups');
    }
};
