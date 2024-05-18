<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function account()
    {
        return view('pages.account');
    }
    public function wallet()
    {
        return view('pages.wallet');
    }
    public function activity()
    {
        return view('pages.activity');
    }
    public function promotion()
    {
        return view('pages.promotion');
    }
    public function recharge()
    {
        return view('pages.recharge');
    }
    public function withdrawal()
    {
        return view('pages.withdrawal');
    }
    public function addBank()
    {
        return view('pages.addbank');
    }
    public function redenvelopes()
    {
        return view('pages.redenvelopes');
    }
    public function notification()
    {
        return view('pages.notification');
    }
    public function bonusrecord()
    {
        return view('pages.bonusrecord');
    }
    public function rechargerecord()
    {
        return view('pages.rechargerecord');
    }
    public function myProfile()
    {
        return view('pages.profile');
    }
    public function withdrawalrecord()
    {
        return view('pages.withdrawalrecord');
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


    public function win()
    {
        return view('games.win');
    }
}
