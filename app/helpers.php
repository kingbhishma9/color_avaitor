<?php

use App\Models\Win1minBet;
use App\Models\Win3minBet;
use App\Models\Win5minBet;


if (!function_exists('generate_referral_number')) {
    function generate_referral_number()
    {
        do {
            $referralNumber = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
        } while (\App\Models\User::where('usercode', $referralNumber)->exists());

        return $referralNumber;
    }
}
if (!function_exists('renderGameId1')) {

    function renderGameId1()
    {

        $win1minbet = Win1minBet::latest('created_at')->first();
        if ($win1minbet == null) {
            $game = new Win1minBet();
            $game->save();
            return  Win1minBet::latest('created_at')->first()->id;
        } else {
            return  Win1minBet::latest('created_at')->first()->id;
        }
    }
}
if (!function_exists('renderGameId3')) {

    function renderGameId3()
    {

        $win3minbet = Win3minBet::latest('created_at')->first();
        if ($win3minbet == null) {
            $game = new Win3minBet();
            $game->save();
            return  Win3minBet::latest('created_at')->first()->id;
        } else {
            return  Win3minBet::latest('created_at')->first()->id;
        }
    }
}
if (!function_exists('renderGameId5')) {

    function renderGameId5()
    {

        $win5minbet = Win5minBet::latest('created_at')->first();
        if ($win5minbet == null) {
            $game = new Win5minBet();
            $game->save();
            return  Win5minBet::latest('created_at')->first()->id;
        } else {
            return  Win5minBet::latest('created_at')->first()->id;
        }
    }
}
