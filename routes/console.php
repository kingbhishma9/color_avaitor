<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('run:getgameid1min', function () {
    $this->call('run:getgameid1min');
})->describe('Run the getgameId1min function');



$schedule = app(Schedule::class);
$schedule->command('run:getgameid1min')->everyMinute();