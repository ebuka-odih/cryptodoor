<?php

namespace App\Http\Controllers;

use App\CoinPicker;
use App\CryptoEvent;
use App\CryptoNews;
use App\LearnCrypto;
use App\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $featured = CryptoNews::where('featured', 1)->latest()->paginate(5);
        $featured_news = NewsUpdate::where('featured', 1)->latest()->paginate(5);
        $coins = CoinPicker::where('featured', 1)->latest()->paginate(5);
        $learn_crypto = CryptoEvent::latest()->paginate(5);
        return view('dashboard.index', compact('featured', 'featured_news', 'learn_crypto', 'coins'));
    }

    public function user()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }
}
