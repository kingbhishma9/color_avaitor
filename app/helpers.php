<?php

use App\Models\Win3minBet;


if (!function_exists('generate_referral_number')) {
    function generate_referral_number()
    {
        do {
            $referralNumber = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
        } while (\App\Models\User::where('usercode', $referralNumber)->exists());

        return $referralNumber;
    }
}
if (!function_exists('renderGameId')) {

    function renderGameId()
    {

        return Win3minBet::latest('created_at')->first()->id;
    }
}
