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
    Schema::create('companies', function (Blueprint $table) {

        $table->id();

        $table->uuid('uuid')->unique();

        $table->string('name');

        $table->string('email')->unique();

        $table->string('phone')->nullable();

        $table->string('website')->nullable();

        $table->string('logo')->nullable();

        $table->text('address')->nullable();

        $table->string('city')->nullable();

        $table->string('country')->default('Kenya');

        $table->string('timezone')->default('Africa/Nairobi');

        $table->enum('subscription_plan', [
            'Free',
            'Starter',
            'Business',
            'Enterprise'
        ])->default('Free');

        $table->enum('subscription_status', [
            'Trial',
            'Active',
            'Expired',
            'Suspended'
        ])->default('Trial');

        $table->boolean('status')->default(true);

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
