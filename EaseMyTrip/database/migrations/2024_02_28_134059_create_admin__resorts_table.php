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
        Schema::create('admin__resorts', function (Blueprint $table) {
            $table->id();
            $table->string('rname');
            $table->string('rdays');
            $table->string('rdesc');
            $table->integer('rprice');
            $table->string('rfacilities');
            $table->string('rimage');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin__resorts');
    }
};
