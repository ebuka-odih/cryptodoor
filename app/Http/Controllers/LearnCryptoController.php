<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use App\LearnCrypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearnCryptoController extends Controller
{
    public function news()
    {
        if (Auth::user()->confirm_payment <= 1){
            return redirect()->route('user.membershipPlan');
        }
        $news = LearnCrypto::latest()->get();
        $featured = LearnCrypto::where('featured', 1)->paginate(5);
        return view('dashboard.learn-crypto', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = LearnCrypto::findOrFail($id);
        $news = LearnCrypto::latest()->paginate(5);
        $featured = LearnCrypto::where('featured', 1)->paginate(5);

        if (Auth::user()->confirm_payment <= 1)
        {
            return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.news.details', compact('post', 'news', 'featured'));
        }
    }
}
