<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use App\Models\Win1minBet;
use App\Models\Win3minBet;
use App\Models\Win5minBet;
use Illuminate\Http\Request;
use App\Models\Win1minBetRecord;
use App\Models\Win3minBetRecord;
use App\Models\Win5minBetRecord;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function support()
    {
        $Setting = AppSetting::where('id', 1)->first();
        return view('pages.support', compact('Setting'));
    }
    public function welcome()
    {
        $Setting = AppSetting::where('id', 1)->first();
        return view('welcome', compact('Setting'));
    }

    public function getGameId()
    {
        $gameId = Win3minBet::latest('created_at')->first();
      
        $num = rand(0, 9);

        if ($num == 0) {
            $col = "RV";
        }
        if ($num == 1) {
            $col = "G";
        }
        if ($num == 2) {
            $col = "R";
        }
        if ($num == 3) {
            $col = "G";
        }
        if ($num == 4) {
            $col = "R";
        }
        if ($num == 5) {
            $col = "GV";
        }
        if ($num == 6) {
            $col = "R";
        }
        if ($num == 7) {
            $col = "G";
        }
        if ($num == 8) {
            $col = "R";
        }
        if ($num == 9) {
            $col = "G";
        }

        Win3minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1111, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);

        $game = new Win3minBet();
        $game->save();
        return response()->json($gameId);
    }
    public function getgameId1min()
    {
        $gameId = Win1minBet::latest('created_at')->first();
      
        $num = rand(0, 9);

        if ($num == 0) {
            $col = "RV";
        }
        if ($num == 1) {
            $col = "G";
        }
        if ($num == 2) {
            $col = "R";
        }
        if ($num == 3) {
            $col = "G";
        }
        if ($num == 4) {
            $col = "R";
        }
        if ($num == 5) {
            $col = "GV";
        }
        if ($num == 6) {
            $col = "R";
        }
        if ($num == 7) {
            $col = "G";
        }
        if ($num == 8) {
            $col = "R";
        }
        if ($num == 9) {
            $col = "G";
        }

        Win1minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1111, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);

        $game = new Win1minBet();
        $game->save();
        return response()->json($gameId);
    }
    public function getgameId5min()
    {
        $gameId = Win5minBet::latest('created_at')->first();
      
        $num = rand(0, 9);

        if ($num == 0) {
            $col = "RV";
        }
        if ($num == 1) {
            $col = "G";
        }
        if ($num == 2) {
            $col = "R";
        }
        if ($num == 3) {
            $col = "G";
        }
        if ($num == 4) {
            $col = "R";
        }
        if ($num == 5) {
            $col = "GV";
        }
        if ($num == 6) {
            $col = "R";
        }
        if ($num == 7) {
            $col = "G";
        }
        if ($num == 8) {
            $col = "R";
        }
        if ($num == 9) {
            $col = "G";
        }

        Win5minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1111, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);

        $game = new Win5minBet();
        $game->save();
        return response()->json($gameId);
    }

    public function setColorBet(Request $request){
        dd($request->all());

    }

   
}
