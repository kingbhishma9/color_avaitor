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
        Schema::create('win5min_bettings', function (Blueprint $table) {
            $table->id();
            $table->string('username', 225)->notNull();
            $table->bigInteger('period')->notNull();
            $table->string('ans', 11)->notNull();
            $table->double('amount')->notNull();
            $table->string('status', 255)->default('pending')->notNull();
            $table->string('res', 255)->default('wait')->notNull();
            $table->string('quantity', 255);
            $table->string('tax', 255);
            $table->string('price', 211)->default('wait')->notNull();
            $table->string('number', 255)->default('wait')->notNull();
            $table->text('color')->nullable();
            $table->string('am', 211)->default('wait')->notNull();
            $table->text('color2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('win5min_bettings');
    }
};
