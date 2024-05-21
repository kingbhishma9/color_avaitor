<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Gift;
use App\Models\User;
use App\Models\Notice;
use App\Models\Setting;
use App\Models\Userbit;
use App\Models\Activity;
use App\Models\AppSetting;
use App\Models\Gameresult;
use App\Models\GiftRecord;
use Illuminate\Http\Request;
use App\Models\RechargeRecord;
use App\Models\ReferralLevel_1;
use App\Models\ReferralLevel_2;
use App\Models\Win1minBetRecord;
use App\Models\Win3minBetRecord;
use App\Models\Win5minBetRecord;
use App\Models\WithdrawalRecord;
use App\Models\Win30secBetRecord;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Setting = AppSetting::where('id', 1)->first();
        return view('pages.home', compact('Setting'));
    }

    public function account()
    {
        $notiCount = Notice::count();
        return view('pages.account', compact('notiCount'));
    }

    public function wallet()
    {
        return view('pages.wallet');
    }

    public function activity()
    {
        $activity = Activity::orderBy('id', 'desc')->get();
        return view('pages.activity', compact('activity'));
    }

    public function promotion()
    {
        $lvl1Count = User::where('refcode1', auth()->user()->usercode)->count();
        $lvl2Count = User::where('refcode2', auth()->user()->usercode)->count();

        $lvl1sum = ReferralLevel_1::where('refcode', auth()->user()->usercode)->sum('referral_level_1s.amount');
        $lvl2sum = ReferralLevel_2::where('refcode', auth()->user()->usercode)->sum('referral_level_2s.amount');

        $totalCommission = $lvl1sum + $lvl2sum;

        return view('pages.promotion', compact('lvl1Count', 'lvl2Count', 'lvl1sum', 'lvl2sum', 'totalCommission'));
    }

    public function recharge()
    {
        return view('pages.recharge');
    }

    public function withdrawal()
    {
        $setting = AppSetting::where('id', 1)->first();
        return view('pages.withdrawal', compact('setting'));
    }
    
    public function withdrawalBlc(Request $request)
    {
        if ($request->password == auth()->user()->show_password) {
            if (auth()->user()->balance >= $request->withdraw) {
                $setting = AppSetting::where('id', 1)->first();
                if ($request->withdraw >= $setting->min_withdrawal && $request->withdraw <= $setting->max_withdrawal) {
                    User::where('id', auth()->user()->id)->update([
                        'balance' => auth()->user()->balance - $request->withdraw,
                    ]);

                    WithdrawalRecord::create([
                        'username' => auth()->user()->username,
                        'amount' => $request->withdraw,
                        'status' => 'Pending',
                        'balance' => auth()->user()->balance,
                    ]);
                }
            }
        }
        return back();
    }

    public function saveBank(Request $request)
    {

        User::where('id', auth()->user()->id)->update([
            'bank_name' => $request->bank_name,
            'account' => $request->account,
            'ifsc' => $request->ifsc,
            'upi' => $request->upi,
            'name' => $request->full_name,

        ]);

        return redirect()->route('withdrawal');
    }

    public function addBank()
    {
        return view('pages.addbank');
    }

    public function redenvelopes(Request $request)
    {
        $GiftRecord = GiftRecord::where('username', auth()->user()->username)->orderBy('id', 'desc')->get();
        return view('pages.redenvelopes', compact('GiftRecord'));
    }

    public function recive_gift(Request $request)
    {
        $gift = Gift::where('code', $request->gift_code)->where('share', 0)->first();
        if ($gift) {

            $user = User::where('username', $request->username)->first();
            $bonus = $user->bonus + $gift->amount;
            $user->update([
                'bonus' => $bonus,
            ]);

            GiftRecord::create([
                'code' => $gift->code,
                'username' => $request->username,
                'amount' => $gift->amount,
            ]);

            $gift->update([
                'share' => $gift->amount,
                'amount' => '0',
            ]);
        }

        return back();
    }

    public function notification()
    {
        $notification = Notice::orderBy('id', 'desc')->get();
        return view('pages.notification', compact('notification'));
    }

    public function bonusrecord()
    {
        return view('pages.bonusrecord');
    }

    public function rechargerecord()
    {
        $rechargeRecord = RechargeRecord::where('username', auth()->user()->username)->orderBy('id', 'desc')->get();
        return view('pages.rechargerecord', compact('rechargeRecord'));
    }

    public function myProfile()
    {
        $setting = AppSetting::where('id', 1)->first();

        return view('pages.profile', compact('setting'));
    }

    public function withdrawalrecord()
    {

        $withdrawalrecord = WithdrawalRecord::where('username', auth()->user()->username)->orderBy('id', 'desc')->get();
        return view('pages.withdrawalrecord', compact('withdrawalrecord'));
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function myTeam()
    {
        return view('pages.myTeam');
    }

    public function payment()
    {
        return view('gateway.payment');
    }

    public function confirmpayment()
    {
        return view('gateway.confirmpayment');
    }

    public function win1(Request $request)
    {
        $Setting = AppSetting::where('id', 1)->first();
        $game_record = Win1minBetRecord::orderBy('id', 'desc')->get();
        $last5 = Win1minBetRecord::orderBy('id', 'desc')->limit(5)->get();
        if ($request->ajax()) {
            return response()->json($game_record);
        }
        return view('games.color.win1min', compact('Setting', 'game_record', 'last5'));
    }

    public function win3(Request $request)
    {
        $Setting = AppSetting::where('id', 1)->first();
        $game_record = Win3minBetRecord::orderBy('id', 'desc')->get();
        $last5 = Win3minBetRecord::orderBy('id', 'desc')->limit(5)->get();
        if ($request->ajax()) {
            return response()->json($game_record);
        }
        return view('games.color.win3min', compact('Setting', 'game_record', 'last5'));
    }

    public function win5(Request $request)
    {
        $Setting = AppSetting::where('id', 1)->first();
        $game_record = Win5minBetRecord::orderBy('id', 'desc')->get();
        $last5 = Win5minBetRecord::orderBy('id', 'desc')->limit(5)->get();
        if ($request->ajax()) {
            return response()->json($game_record);
        }
        return view('games.color.win5min', compact('Setting', 'game_record', 'last5'));
    }

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

    public function new_game_generated(Request $r)
    {
        $new = Setting::where('category', 'game_status')->update(['value' => '0']);

        return response()->json(array("id" => 1));
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

    public function change_name(Request $request)
    {
        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
        ]);
        return back();
    }
}
