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
        Schema::create('recharge_records', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('amount');
            $table->string('upi');
            $table->string('utr');
            $table->string('orderid');
            $table->string('deposit_blc');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recharge_records');
    }
};
