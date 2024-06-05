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
use App\Models\Win1minPeriod;
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

    public function getGame3Id()
    {
            $gameId = Win3minBet::latest('created_at')->first();
        $num = rand(0, 9);
        $colors = ["RV", "G", "R", "G", "R", "GV", "R", "G", "R", "G"];
        $col = $colors[$num];
        $price = rand(1000, 9999) . $num;
        $updateResult = Win3minBetting::where('period', $gameId->id)->get();
        foreach ($updateResult as $data) {
            $user=User::where('username',$data->username)->first();
            if ($data->ans == $num) {
                $am = $data->amount * 9;

                $finalbalance = $am + $user->balance;

                User::where('username', $user->username)->update([
                    'balance' => $finalbalance
                ]);

                Transaction::create([
                    'username' => $user->username,
                    'particular' => 'win1',
                    'credit' =>  $am,

                ]);

                $res = 'success';
            } else if ($data->ans == 'green') {
                if ($col == 'G') {

                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'GV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);

                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else if ($data->ans == 'red') {
                if ($col == 'R') {
                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'RV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else if ($data->ans == 'violet') {
                if ($col == 'RV') {


                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'GV') {
                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else {
                $am = 'wait';
                $res = 'fail';
            }
            Win3minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => $res,
            ]);
        }
        Win3minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1000, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);
        $game = new Win3minBet();
        $game->save();
    }

   

    public function getGameId1min()
    {
        $gameId = Win1minBet::latest('created_at')->first();
        $num = rand(0, 9);
        $colors = ["RV", "G", "R", "G", "R", "GV", "R", "G", "R", "G"];
        $col = $colors[$num];
        $price = rand(1000, 9999) . $num;
        $updateResult = Win1minBetting::where('period', $gameId->id)->get();
        
   
        foreach ($updateResult as $data) {
            $user=User::where('username',$data->username)->first();
            if ($data->ans == $num) {
                $am = $data->amount * 9;
                $finalbalance = $am + $user->balance;
                User::where('username', $user->username)->update([
                    'balance' => $finalbalance
                ]);
                Transaction::create([
                    'username' => $user->username,
                    'particular' => 'win1',
                    'credit' =>  $am,
                ]);
                 Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
            } else if ($data->ans == 'green') {
                if ($col == 'G') {
                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;
                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);
                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,
                    ]);
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else if ($col == 'GV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;
                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);
                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,
                    ]);
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else {
                  Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => 'wait',
                'res' => 'fail',
            ]);
                }
            } else if ($data->ans == 'red') {
                if ($col == 'R') {
                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;
                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);
                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,
                    ]);
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else if ($col == 'RV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;
                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);
                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,
                    ]);
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else {
                    Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => 'wait',
                'res' => 'fail',
            ]);
                }
            } else if ($data->ans == 'violet') {
                if ($col == 'RV') {
                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;
                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                      Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else if ($col == 'GV') {
                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => 'success',
            ]);
                } else {
                     Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => 'wait',
                'res' => 'fail',
            ]);
                }
            } else {
                Win1minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => 'wait',
                'res' => 'fail',
            ]);
            }
           
        }
        Win1minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1000, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);
        $game = new Win1minBet();
        $game->save();
    }

  

    public function getgameId5min()
    {
        $gameId = Win5minBet::latest('created_at')->first();
        $num = rand(0, 9);
        $colors = ["RV", "G", "R", "G", "R", "GV", "R", "G", "R", "G"];
        $col = $colors[$num];
        $price = rand(1000, 9999) . $num;
        $updateResult = Win5minBetting::where('period', $gameId->id)->get();
        foreach ($updateResult as $data) {
            $user=User::where('username',$data->username)->first();
            if ($data->ans == $num) {
                $am = $data->amount * 9;

                $finalbalance = $am + $user->balance;

                User::where('username', $user->username)->update([
                    'balance' => $finalbalance
                ]);

                Transaction::create([
                    'username' => $user->username,
                    'particular' => 'win1',
                    'credit' =>  $am,

                ]);

                $res = 'success';
            } else if ($data->ans == 'green') {
                if ($col == 'G') {

                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'GV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);

                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else if ($data->ans == 'red') {
                if ($col == 'R') {
                    $am = $data->amount * 2;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'RV') {
                    $am = $data->amount * 1.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else if ($data->ans == 'violet') {
                if ($col == 'RV') {


                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else if ($col == 'GV') {
                    $am = $data->amount * 4.5;
                    $finalbalance = $am + $user->balance;

                    User::where('username', $user->username)->update([
                        'balance' => $finalbalance
                    ]);

                    Transaction::create([
                        'username' => $user->username,
                        'particular' => 'win1',
                        'credit' =>  $am,

                    ]);
                    $res = 'success';
                } else {
                    $am = 'wait';
                    $res = 'fail';
                }
            } else {
                $am = 'wait';
                $res = 'fail';
            }
            Win5minBetting::where('period', $gameId->id)->update([
                'status' => 'successful',
                'price' => $price,
                'number' => $num,
                'color' => $col,
                'am' => $am,
                'res' => $res,
            ]);
        }
        Win5minBetRecord::create([
            'period' => $gameId->id,
            'ans' => rand(1000, 9999) . $num,
            'num' => $num,
            'clo' => $col,

        ]);
        $game = new Win5minBet();
        $game->save();
    }
  
    
    

    public function setColorBet(Request $request)
    {

        $app = AppSetting::where('id', 1)->first();

        $tax = ($request->amount * $app->color_prediction_charge) / 100;
        $amount = $request->amount - $tax;



        $totalbetAmount = auth()->user()->balance + auth()->user()->bonus + auth()->user()->deposit + auth()->user()->refbalance;
        
        if ($request->amount <= $totalbetAmount) {
            if ($request->game == 'win1') {
                $gameId = Win1minBet::latest('created_at')->first()->id;
                if (auth()->user()->refbalance >= $request->amount) {

                    $bets = Win1minBetting::create([
                        'username' => auth()->user()->username,
                        'period' => $gameId,
                        'ans' => $request->ans,
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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
                        'amount' => $amount,
                        'quantity' => $request->quantity,
                        'tax' => $tax,
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

    public function getBeting(Request $request)
    {
        $beting = Win1minBetting::where('username', auth()->user()->username)->orderBy('id', 'desc')->get();


        return response()->json($beting);
    }
    
    public function getBeting3(Request $request)
    {
        $beting = Win3minBetting::where('username', $request->username)->orderBy('id', 'desc')->get();


        return response()->json($beting);
    }
    
    public function getBeting5(Request $request)
    {
        $beting = Win5minBetting::where('username', $request->username)->orderBy('id', 'desc')->get();


        return response()->json($beting);
    }
    
    public   function showResult(Request $request)
    {


        if ($request->url == 'win1') {

            $id = Win1minBet::latest('created_at')->first()->id - 1;
            $userdata = Win1minBetting::where('period', $id)->where('username', auth()->user()->username)->first();
            return response()->json($userdata);
        }
        if ($request->url == 'win3') {

            $id = Win3minBet::latest('created_at')->first()->id - 1;
            $userdata = Win3minBetting::where('period', $id)->where('username', auth()->user()->username)->first();
            return response()->json($userdata);
        }
        if ($request->url == 'win5') {

            $id = Win5minBet::latest('created_at')->first()->id - 1;
            $userdata = Win5minBetting::where('period', $id)->where('username', auth()->user()->username)->first();
            return response()->json($userdata);
        }
    }

    public function showGameId()
    {
        $gameId = Win1minBet::latest('created_at')->first();
        return response()->json($gameId);
    }
    
}
