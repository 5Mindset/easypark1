<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parking_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade'); 
            $table->foreignId('qr_code_id')->constrained('qr_codes')->onDelete('cascade'); 
            $table->dateTime('check_in_time')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->dateTime('check_out_time')->nullable(); 
            $table->string('status')->default('ongoing'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_records');
    }
};
