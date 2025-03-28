<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('parking_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('qr_code_id')->constrained()->onDelete('cascade'); 
            $table->timestamp('check_in_time'); 
            $table->timestamp('check_out_time')->nullable(); 
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parking_records');
    }
};
