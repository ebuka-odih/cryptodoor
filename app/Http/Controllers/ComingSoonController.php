<?php

namespace App\Http\Controllers;

use App\ComingSoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComingSoonController extends Controller
{
    public function news()
    {
        if (Auth::user()->confirm_payment <= 1){
            return redirect()->route('user.membershipPlan');
        }
        $news = ComingSoon::latest()->get();
        $featured = ComingSoon::where('featured', 1)->paginate(5);
        return view('dashboard.coming-soon', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = ComingSoon::findOrFail($id);
        $news = ComingSoon::latest()->paginate(5);
        $featured = ComingSoon::where('featured', 1)->paginate(5);

        if (Auth::user()->confirm_payment <= 1)
        {
            return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.news.details', compact('post', 'news', 'featured'));
        }
    }
}
