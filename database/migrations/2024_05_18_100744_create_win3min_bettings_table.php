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
            $table->string('username', 225);
            $table->bigInteger('period');
            $table->string('ans', 11);
            $table->double('amount');
            $table->string('status', 255)->default('pending');
            $table->string('res', 255)->default('wait');
            $table->string('price', 211)->default('wait');
            $table->string('number', 255)->default('wait');
            $table->text('color');
            $table->string('am', 211)->default('wait');
            $table->text('color2');
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
