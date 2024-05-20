<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Win3minBet;

class FrontendController extends Controller
{
    public function support()
    {
        $Setting=AppSetting::where('id',1)->first();
        return view('pages.support',compact('Setting'));
    }
    public function welcome()
    {
        $Setting=AppSetting::where('id',1)->first();
        return view('welcome',compact('Setting'));
    }

    public function getGameId(){
     $gameId=Win3minBet::latest('created_at')->first();
     $game=new Win3minBet();
     $game->save();
     return response()->json($gameId);
    }
}
