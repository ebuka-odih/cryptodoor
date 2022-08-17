<?php

namespace App\Http\Controllers;

use App\CoinPicker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoinPickerController extends Controller
{
    public function coins()
    {
        if (Auth::user()->confirm_payment <= 1){
            return redirect()->route('user.membershipPlan');
        }
        $coins = CoinPicker::all();
        return view('dashboard.coin-pick', compact('coins'));
    }
}
