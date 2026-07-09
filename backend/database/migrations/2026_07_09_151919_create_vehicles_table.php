<?php

use App\Enums\VehicleStatus;
use App\Enums\VehicleType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {

            $table->id();

            $table->uuid('uuid')->unique();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('registration_number')->unique();

            $table->string('fleet_number')->unique();

            $table->enum(
                'type',
                array_column(VehicleType::cases(), 'value')
            );

            $table->string('brand');

            $table->string('model');

            $table->string('color')->nullable();

            $table->year('manufacture_year')->nullable();

            $table->integer('capacity_kg')->nullable();

            $table->string('fuel_type')->nullable();

            $table->enum(
                'status',
                array_column(VehicleStatus::cases(), 'value')
            )->default(VehicleStatus::AVAILABLE->value);

            $table->integer('current_odometer')->default(0);

            $table->date('insurance_expiry')->nullable();

            $table->date('inspection_expiry')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};