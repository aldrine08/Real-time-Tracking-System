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
    Schema::table('users', function (Blueprint $table) {

        $table->uuid('uuid')->unique()->after('id');

        $table->foreignId('company_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->foreignId('role_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->string('first_name')->after('role_id');

        $table->string('last_name')->after('first_name');

        $table->string('phone')->nullable();

        $table->string('profile_photo')->nullable();

        $table->boolean('status')->default(true);

        $table->timestamp('last_login_at')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
