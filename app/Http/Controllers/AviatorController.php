<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Setting;
use App\Models\Userbit;
use App\Models\Gameresult;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AviatorController extends Controller
{
    public function aviator()
    {
        $allresults = Gameresult::where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id', 'desc')->get();
        $mybets = Userbit::where('userid', auth()->user()->username)->where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id', 'desc')->get();

        return view('games.aviator.aviator', compact("allresults", "mybets"));
    }

    public function get_user_details()
    {
        $data = "";
        $isSuccess = false;
        $message = "Something went wrong!";
        $notification = "";
        $avatar = "images/avtar/av-1.png";
        $data = array("username" => auth()->user()->username, "avatar" => $avatar, "notification" => $notification);
        $message = "Success";
        $isSuccess = true;
        $res = array("data" => $data, "isSuccess" => $isSuccess, "message" => $message);
        return response()->json($res);
    }

    public function new_game_generated(Request $r)
    {
        $new = Setting::where('category', 'game_status')->update(['value' => '0']);

        return response()->json(array("id" => 1));
    }

    public function currentlybet()
    {
        $data = Gameresult::orderBy('id', 'desc')->first();
        if ($data) {
            $game_ids = $data->id;
        } else {
            $game_ids = 0;
        }


        $allbets = Userbit::where("gameid", $game_ids)->join('users', 'users.username', '=', 'userbits.userid')->get();
        $currentGameBet = $allbets;
        for ($i = 0; $i < rand(400, 900); $i++) {
            $currentGameBet[] = array(
                "userid" => rand(10000, 50000),
                "amount" => rand(999, 9999),
                "image"  => "/images/avtar/av-" . rand(1, 72) . ".png"
            );
        }
        $currentGame = array("id" => $game_ids);
        $currentGameBetCount = count($currentGameBet);
        $response = array("currentGame" => $currentGame, "currentGameBet" => $currentGameBet, "currentGameBetCount" => $currentGameBetCount);
        return response()->json($response);
    }
      

    public function increamentor(Request $r)
    {
        $gamestatusdata = Setting::where('category', 'game_status')->first();
        $res = 0;
        if ($gamestatusdata) {

            $data = Gameresult::orderBy('id', 'desc')->first();
            if ($data) {
                $game_ids = $data->id;
            } else {
                $game_ids = 0;
            }
            $totalbet = Userbit::where('gameid', $game_ids)->count();
            $totalamount = Userbit::where('gameid', $game_ids)->sum('amount');
            if ($totalbet == 0) {
                $res =   rand(3, 20);
            } else {
                //   $randomresult = array(1.1,1.1,1.2,1.3,1.4,1.5,1.6,1.7,1.8,1.9);

                $emailvalue = Setting::where('id', '14')->sum('value');


                if ($emailvalue == 10) {
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    $res = $randomresult[rand(0, 8)];
                }

                if ($emailvalue == 20) {
                    $randomresult = array(2.1, 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 2.8, 2.9);
                    $res = $randomresult[rand(0, 8)];
                }

                if ($emailvalue == 30) {
                    $randomresult = array(3.1, 3.1, 3.2, 3.3, 3.4, 3.5, 3.6, 3.7, 3.8, 3.9);
                    $res = $randomresult[rand(0, 8)];
                }

                if ($emailvalue == 40) {
                    $randomresult = array(4.1, 4.1, 4.2, 4.3, 4.4, 4.5, 4.6, 4.7, 4.8, 4.9);
                    $res = $randomresult[rand(0, 8)];
                }
                $aa = $emailvalue;

                if ($emailvalue == $aa) {
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    // $res = $randomresult[rand(0,8)];
                    // if (session()->has('result')) {
                    //     return session()->get('result');
                    // }
                    // $r->session()->put('result',$res);
                    // return $res;
                    $res = $emailvalue;
                }

                if ($emailvalue == 100) {
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    $res = $randomresult[rand(0, 8)];
                    // if (session()->has('result')) {
                    //     return session()->get('result');
                    // }
                    // $r->session()->put('result',$res);
                    // return $res;
                    //  $res = $emailvalue;

                }
                // else{
                // {

                //     $res = $emailvalue;
                // }
                // $res =$emailvalue;

                //           //  $gamestatusdataend = Setting::where('category', 'game_between_time_end')->first();
                //   $res =  $randomresult[rand(0,2)]; //$emailvalue;

            }

            $status = true;
            $result = $res;
            $response = array('status' => $status, 'result' => $result);
            return response()->json($response);
        }
    }
    public function betNow(Request $r)
    {
        $status = false;
        $message = "Something went wrong!";
        $returnbets = array();
        for($i=0; $i < count($r->all_bets); $i++){
		$result = new Userbit;
        $result->userid = user('id');
        $result->amount = $r->all_bets[$i]['bet_amount'];
        $result->type = $r->all_bets[$i]['bet_type'];
        $result->gameid = currentid();
        $result->section_no = $r->all_bets[$i]['section_no'];
        if ($r->all_bets[$i]['bet_amount'] < wallet(user('id'), 'num')) {
            if ($result->save()) {
                $status = true;
                array_push($returnbets, [
                    "bet_id" => $result->id,
                ]);
				/*array_push($returnbets, [
                    "bet_id" => currentid(),
                ]);*/
                $exact_wallet_balance = addwallet(user('id'), floatval($r->all_bets[$i]['bet_amount']), "-");
                $data = array(
                    "wallet_balance" => wallet(user('id')),
                    "return_bets" => $returnbets
                );
                $message = "";
            }
        } else {
            $status = false;
            $data = array();
            $message = "Insufficient fund!!";
        }
		}
        $response = array("isSuccess" => $status, "data" => $data, "message" => $message);
        return response()->json($response);
    }
}
