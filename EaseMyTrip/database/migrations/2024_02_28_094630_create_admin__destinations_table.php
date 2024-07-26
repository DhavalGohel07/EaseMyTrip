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
        Schema::create('admin__destinations', function (Blueprint $table) {
            $table->id();
            $table->string('dname');
            $table->string('ddays');
            $table->string('ddesc');
            $table->string('dplace');
            $table->integer('dprice');
            $table->string('dest_image');
            $table->string('dcat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin__destinations');
    }
};
