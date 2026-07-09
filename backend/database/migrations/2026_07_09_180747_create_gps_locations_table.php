<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gps_locations', function (Blueprint $table) {

            $table->id();

            $table->foreignId('rider_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('vehicle_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('shipment_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->decimal('latitude', 10, 7);

            $table->decimal('longitude', 10, 7);

            $table->decimal('speed', 8, 2)->default(0);

            $table->decimal('heading', 8, 2)->nullable();

            $table->decimal('accuracy', 8, 2)->nullable();

            $table->timestamp('recorded_at');

            $table->timestamps();

            $table->unique('rider_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gps_locations');
    }
};