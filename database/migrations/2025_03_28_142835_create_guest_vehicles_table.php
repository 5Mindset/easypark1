<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('guest_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('license_plate')->unique();
            $table->foreignId('vehicle_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('vehicle_model_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('vehicle_color_id')->nullable()->constrained()->onDelete('set null');
            $table->string('stnk_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guest_vehicles');
    }
};
