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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('version');
            $table->string('upi');
            $table->string('min_recharge');
            $table->string('max_recharge');
            $table->string('min_withdrawal');
            $table->string('max_withdrawal');
            $table->string('support_url');
            $table->string('otp_enable');
            $table->string('otp_api');
            $table->string('agent_percentage');
            $table->string('withdrawal_charge_enable');
            $table->string('withdrawal_enable');
            $table->string('withdrawal_charge');
            $table->string('color_prediction_charge');
            $table->string('aviatar_charge');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
