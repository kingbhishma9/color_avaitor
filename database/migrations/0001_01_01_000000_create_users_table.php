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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('show_password');
            $table->string('balance')->default(0);
            $table->string('bonus')->default(0);
            $table->string('deposit')->default(0);
            $table->string('refbalance')->default(0);
            $table->string('usercode');
            $table->string('img');
            $table->string('bank_name')->nullable();
            $table->string('account')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('upi')->nullable();
            $table->string('refcode1')->nullable();
            $table->string('refcode2')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default(0);
            $table->string('agent')->default(0);
            $table->string('Address')->nullable();
            $table->string('ip');
            $table->string('otp_verified')->nullable();
            $table->string('withdrawal_enable')->default(0);
            $table->string('last_login')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
