<?php

use App\Enums\RiderAvailability;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riders', function (Blueprint $table) {

            $table->id();

            $table->uuid('uuid')->unique();

            $table->foreignId('company_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('employee_number')->unique();

            $table->string('license_number')->unique();

            $table->date('license_expiry');

            $table->string('national_id')->unique();

            $table->string('phone');

            $table->string('emergency_contact_name');

            $table->string('emergency_contact_phone');

            $table->date('employment_date');

            $table->enum(
                'availability',
                array_column(RiderAvailability::cases(), 'value')
            )->default(RiderAvailability::AVAILABLE->value);

            $table->boolean('is_active')->default(true);

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riders');
    }
};