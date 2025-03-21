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
        Schema::create('guest_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('users')->onDelete('cascade');
            $table->string('plate_number', 9)->unique(); 
            $table->string('vehicle_photo')->nullable(); 
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
        Schema::dropIfExists('guest_vehicles');
    }
};
