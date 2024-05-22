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
        Schema::create('win3min_bettings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->bigInteger('period');
            $table->string('ans');
            $table->double('amount');
            $table->string('status')->default('pending');
            $table->string('res')->default('wait');
            $table->string('price')->default('wait');
            $table->string('number')->default('wait');
            $table->text('color')->default('wait');
            $table->string('am')->default('wait');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('win3min_bettings');
    }
};
