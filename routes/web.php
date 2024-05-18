<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/keFuMenu', [App\Http\Controllers\FrontendController::class, 'support'])->name('support');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/activity', [App\Http\Controllers\HomeController::class, 'activity'])->name('activity');
Route::get('/promotion', [App\Http\Controllers\HomeController::class, 'promotion'])->name('promotion');
Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
Route::get('/win', [App\Http\Controllers\HomeController::class, 'win'])->name('win');
// Route::get('/win1', [App\Http\Controllers\HomeController::class, 'index'])->name('win1');
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
