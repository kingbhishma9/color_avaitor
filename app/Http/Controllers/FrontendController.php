<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AppSetting;
use App\Models\Win1minBet;
use App\Models\Win3minBet;
use App\Models\Win5minBet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Win1minBetting;
use App\Models\Win3minBetting;
use App\Models\Win5minBetting;
use App\Models\Win1minBetRecord;
use App\Models\Win3minBetRecord;
use App\Models\Win5minBetRecord;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
        $gameId2 = Win3minBet::latest('created_at')->first();
        return response()->json($gameId2);
    }


    public function getGameId1()
    {
        $gameId = Win1minBet::lastInsertId();
        return response()->json($gameId->id);
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


        $price = rand(1111, 9999) . $num;

        Win1minBetRecord::create([
            'period' => $gameId->id,
            'ans' => $price,
            'num' => $num,
            'clo' => $col,

        ]);


        if ($col == 'G' || $col == 'GV') {
            $colors = 'green';
        }
        if ($col == 'R' || $col == 'RV') {
            $colors = 'red';
        }
        if ($col == 'GV' || $col == 'RV') {
            $colors = 'violet';
        }



        $updateResult = Win1minBetting::where('period', $gameId->id)->get();

        foreach ($updateResult as $data) {

            if ($data->ans == $num || $data->ans == $colors) {

                if ($data->ans == 'red' || $data->ans == 'green') {
                    $multiply = $data->amount * 2;
                }
                if ($data->ans == 'violet') {
                    $multiply = $data->amount * 4.5;
                }
                if (
                    $data->ans == '1' || $data->ans == '2' || $data->ans == '3' ||
                    $data->ans == '4' || $data->ans == '5' || $data->ans == '6' ||
                    $data->ans == '7' || $data->ans == '8' || $data->ans == '9' ||
                    $data->ans == '0'
                ) {
                    $multiply = $data->amount * 9;
                }

                $finalbalance = $multiply + auth()->user()->balance;
                User::where('username', auth()->user()->username)->update([
                    'balance' => $finalbalance
                ]);


                $data->res = 'success';
            } else {
                $data->res = 'fail';
            }
            $data->status = 'successful';
            $data->price = $price;
            $data->number = $num;
            $data->color = $col;
            $data->save();
        }


        $game = new Win1minBet();
        $game->save();

        $gameId2 = Win1minBet::latest('created_at')->first();
        return response()->json($gameId2);
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

        $gameId2 = Win5minBet::latest('created_at')->first();
        return response()->json($gameId2);
    }

    public function setColorBet(Request $request)
    {

        
       

        $totalbetAmount = auth()->user()->balance + auth()->user()->bonus + auth()->user()->deposit + auth()->user()->refbalance;
        if ($request->amount <= $totalbetAmount) {
            if ($request->game == 'win1') {
                $gameId = Win1minBet::latest('created_at')->first()->id;
                if (auth()->user()->refbalance >= $request->amount) {

                    $bets = Win1minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $updateAmount = auth()->user()->refbalance - $request->amount;
                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => $updateAmount
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance >= $request->amount) {

                    $bets = Win1minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $updateAmount = auth()->user()->bonus - $referraleAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit >= $request->amount) {
                    $bets = Win1minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $updateAmount = auth()->user()->deposit - $bonusAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit + auth()->user()->balance >= $request->amount) {
                    $bets = Win1minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $deositAmount = $bonusAmount - auth()->user()->deposit;
                        $updateAmount = auth()->user()->balance - $deositAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => '0',
                            'balance' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else {
                    return Redirect::back()->withErrors(['msg' => 'Insuffesent Balance']);
                }
            }
            if ($request->game == 'win3') {
                $gameId = Win3minBet::latest('created_at')->first()->id;
                if (auth()->user()->refbalance >= $request->amount) {

                    $bets = Win3minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $updateAmount = auth()->user()->refbalance - $request->amount;
                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => $updateAmount
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance >= $request->amount) {

                    $bets = Win3minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $updateAmount = auth()->user()->bonus - $referraleAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit >= $request->amount) {
                    $bets = Win3minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $updateAmount = auth()->user()->deposit - $bonusAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit + auth()->user()->balance >= $request->amount) {
                    $bets = Win3minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $deositAmount = $bonusAmount - auth()->user()->deposit;
                        $updateAmount = auth()->user()->balance - $deositAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => '0',
                            'balance' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else {
                    return Redirect::back()->withErrors(['msg' => 'Insuffesent Balance']);
                }
            }
            if ($request->game == 'win5') {
                $gameId = Win5minBet::latest('created_at')->first()->id;
                if (auth()->user()->refbalance >= $request->amount) {

                    $bets = Win5minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $updateAmount = auth()->user()->refbalance - $request->amount;
                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => $updateAmount
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance >= $request->amount) {

                    $bets = Win5minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $updateAmount = auth()->user()->bonus - $referraleAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit >= $request->amount) {
                    $bets = Win5minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $updateAmount = auth()->user()->deposit - $bonusAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else if (auth()->user()->bonus + auth()->user()->refbalance + auth()->user()->deposit + auth()->user()->balance >= $request->amount) {
                    $bets = Win5minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $request->amount,
                    ]);
                    if ($bets) {
                        $referraleAmount = $request->amount - auth()->user()->refbalance;
                        $bonusAmount =  $referraleAmount - auth()->user()->bonus;
                        $deositAmount = $bonusAmount - auth()->user()->deposit;
                        $updateAmount = auth()->user()->balance - $deositAmount;

                        User::where('id', auth()->user()->id)->update([
                            'refbalance' => '0',
                            'bonus' => '0',
                            'deposit' => '0',
                            'balance' => $updateAmount,
                        ]);

                        Transaction::create([
                            'username' => auth()->user()->username,
                            'particular' => $request->game,
                            'debit' => $request->amount,

                        ]);

                        return Redirect::back()->withErrors(['msg' => 'Bets Placed Successfully!']);
                    } else {
                        return Redirect::back()->withErrors(['msg' => 'Something Went Wrong!']);
                    }
                } else {
                    return Redirect::back()->withErrors(['msg' => 'Insuffesent Balance']);
                }
            }
        } else {
            return Redirect::back()->withErrors(['msg' => 'Insuffesent Balance']);
        }
    }

    public function getBeting(Request $request){
        $beting=Win1minBetting::where('username',$request->username)->orderBy('id','desc')->get();


        return response()->json($beting);
    }
    public function getBeting3(Request $request){
        $beting=Win3minBetting::where('username',$request->username)->orderBy('id','desc')->get();


        return response()->json($beting);
    }
    public function getBeting5(Request $request){
        $beting=Win5minBetting::where('username',$request->username)->orderBy('id','desc')->get();


        return response()->json($beting);
    }
}
