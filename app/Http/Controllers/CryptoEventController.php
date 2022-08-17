<?php

namespace App\Http\Controllers;

use App\CryptoEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CryptoEventController extends Controller
{
    public function news()
    {
        $news = CryptoEvent::latest()->get();
        $featured = CryptoEvent::where('featured', 1)->paginate(5);
        return view('dashboard.crypto-event', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = CryptoEvent::findOrFail($id);
        $news = CryptoEvent::latest()->paginate(5);
        $featured = CryptoEvent::where('featured', 1)->paginate(5);

        if (Auth::user()->confirm_payment <= 1)
        {
            return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.news.details', compact('post', 'news', 'featured'));
        }
    }
}
