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
        Schema::create('win5min_bet_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('period')->notNull();
            $table->string('ans', 11)->notNull();
            $table->string('num', 20)->notNull();
            $table->tinyText('clo')->notNull();
            $table->string('res1', 211)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('win5min_bet_records');
    }
};
