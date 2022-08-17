<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use App\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CryptoNewsController extends Controller
{
    public function news()
    {
        $news = CryptoNews::latest()->get();
        $featured = CryptoNews::where('featured', 1)->paginate(5);
        return view('dashboard.news.news', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = CryptoNews::findOrFail($id);
        $news = CryptoNews::latest()->paginate();
        if (Auth::user()->confirm_payment <= 1)
        {
           return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.news.details', compact('post', 'news'));
        }
    }
}
