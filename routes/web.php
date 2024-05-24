<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'welcome'])->name('welcome');
Route::get('/keFuMenu', [App\Http\Controllers\FrontendController::class, 'support'])->name('support');

Auth::routes();

Route::any('get-gameId', [FrontendController::class, 'getGameId'])->name('get.gameId');
Route::any('get-gameId1min', [FrontendController::class, 'getgameId1min'])->name('get.gameId1min');
Route::any('get-gameId5min', [FrontendController::class, 'getgameId5min'])->name('get.gameId5min');

Route::any('set-colorBet', [FrontendController::class, 'setColorBet'])->name('set.colorBet');
Route::any('getBeting', [FrontendController::class, 'getBeting'])->name('getBeting');
Route::any('getBeting3', [FrontendController::class, 'getBeting3'])->name('getBeting3');
Route::any('getBeting5', [FrontendController::class, 'getBeting5'])->name('getBeting5');

Route::any('showResult', [FrontendController::class, 'showResult'])->name('showResult');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/activity', [App\Http\Controllers\HomeController::class, 'activity'])->name('activity');
Route::get('/promotion', [App\Http\Controllers\HomeController::class, 'promotion'])->name('promotion');
Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');

Route::get('/win1', [App\Http\Controllers\HomeController::class, 'win1'])->name('win1');
Route::get('/win3', [App\Http\Controllers\HomeController::class, 'win3'])->name('win3');
Route::get('/win5', [App\Http\Controllers\HomeController::class, 'win5'])->name('win5');

Route::get('/recharge', [App\Http\Controllers\HomeController::class, 'recharge'])->name('recharge');
Route::get('/withdrawal', [App\Http\Controllers\HomeController::class, 'withdrawal'])->name('withdrawal');
Route::get('/withdrawal', [App\Http\Controllers\HomeController::class, 'withdrawal'])->name('withdrawal');
Route::get('/addbank', [App\Http\Controllers\HomeController::class, 'addBank'])->name('addBank');
Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');
Route::get('/confirmpayment', [App\Http\Controllers\HomeController::class, 'confirmpayment'])->name('confirmpayment');
Route::get('/redenvelopes', [App\Http\Controllers\HomeController::class, 'redenvelopes'])->name('redenvelopes');
Route::get('/Messages', [App\Http\Controllers\HomeController::class, 'notification'])->name('notification');
Route::get('/bonusrecord', [App\Http\Controllers\HomeController::class, 'bonusrecord'])->name('bonusrecord');
Route::get('/rechargerecord', [App\Http\Controllers\HomeController::class, 'rechargerecord'])->name('rechargerecord');
Route::get('/myProfile', [App\Http\Controllers\HomeController::class, 'myProfile'])->name('myProfile');
Route::get('/withdrawalrecord', [App\Http\Controllers\HomeController::class, 'withdrawalrecord'])->name('withdrawalrecord');
Route::get('/mission', [App\Http\Controllers\HomeController::class, 'mission'])->name('mission');
Route::get('/myTeam', [App\Http\Controllers\HomeController::class, 'myTeam'])->name('myTeam');

Route::get('/crash', [App\Http\Controllers\HomeController::class, 'aviator'])->name('crash');
Route::get('/get_user_details', [App\Http\Controllers\HomeController::class, 'get_user_details'])->name('get_user_details');
Route::post('/game/new_game_generated', [App\Http\Controllers\HomeController::class, 'new_game_generated'])->name('new_game_generated');
Route::post('/game/currentlybet', [App\Http\Controllers\HomeController::class, 'currentlybet'])->name('currentlybet');
Route::post('/game/increamentor', [App\Http\Controllers\HomeController::class, 'increamentor'])->name('increamentor');

Route::post('change_name', [App\Http\Controllers\HomeController::class, 'change_name'])->name('change_name');
Route::post('recive_gift', [App\Http\Controllers\HomeController::class, 'recive_gift'])->name('recive_gift');
Route::post('withdrawalBlc', [App\Http\Controllers\HomeController::class, 'withdrawalBlc'])->name('withdrawalBlc');
Route::post('saveBank', [App\Http\Controllers\HomeController::class, 'saveBank'])->name('saveBank');

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize');
    dd('Cache cleared successfully');
});