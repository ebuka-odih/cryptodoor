<?php

namespace App\Http\Controllers;

use App\CoinPicker;
use Illuminate\Http\Request;

class CoinPickerController extends Controller
{
    public function coins()
    {
        $coins = CoinPicker::all();
        return view('dashboard.coin-pick', compact('coins'));
    }
}
