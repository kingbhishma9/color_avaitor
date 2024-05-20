<?php

namespace App\Http\Controllers;

use App\Models\AppSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
