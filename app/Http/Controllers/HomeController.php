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
use App\Models\Win1minBetting;
use App\Models\Win3minBetting;
use App\Models\Win5minBetting;
use App\Models\ReferralLevel_1;
use App\Models\ReferralLevel_2;
use App\Models\Win1minBetRecord;
use App\Models\Win3minBetRecord;
use App\Models\Win5minBetRecord;
use App\Models\WithdrawalRecord;

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

        $betting1=  Win1minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting3=  Win3minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting5=  Win5minBetting::where('username', auth()->user()->username)->sum('amount');

        $tax1=  Win1minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax3=  Win3minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax5=  Win5minBetting::where('username', auth()->user()->username)->sum('tax');


        $totabetting=$betting1+$betting3+$betting5+$tax1+$tax3+$tax5;
        if ($request->ajax()) {
            return response()->json($game_record);
        }
        
        return view('games.color.win1min', compact('Setting', 'game_record','totabetting'));
    }

    public function win3(Request $request)
    {
        $Setting = AppSetting::where('id', 1)->first();
        $game_record = Win3minBetRecord::orderBy('id', 'desc')->get();
        $betting1=  Win1minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting3=  Win3minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting5=  Win5minBetting::where('username', auth()->user()->username)->sum('amount');
        $tax1=  Win1minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax3=  Win3minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax5=  Win5minBetting::where('username', auth()->user()->username)->sum('tax');


        $totabetting=$betting1+$betting3+$betting5+$tax1+$tax3+$tax5;
        if ($request->ajax()) {
            return response()->json($game_record);
        }
        return view('games.color.win3min', compact('Setting', 'game_record','totabetting'));
    }

    public function win5(Request $request)
    {
        $Setting = AppSetting::where('id', 1)->first();
        $game_record = Win5minBetRecord::orderBy('id', 'desc')->get();
        $betting1=  Win1minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting3=  Win3minBetting::where('username', auth()->user()->username)->sum('amount');
        $betting5=  Win5minBetting::where('username', auth()->user()->username)->sum('amount');
        $tax1=  Win1minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax3=  Win3minBetting::where('username', auth()->user()->username)->sum('tax');
        $tax5=  Win5minBetting::where('username', auth()->user()->username)->sum('tax');


        $totabetting=$betting1+$betting3+$betting5+$tax1+$tax3+$tax5;


        if ($request->ajax()) {
            return response()->json($game_record);
        }
        return view('games.color.win5min', compact('Setting', 'game_record', 'totabetting'));
    }

  

  




    public function change_name(Request $request)
    {
        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
        ]);
        return back();
    }
}
