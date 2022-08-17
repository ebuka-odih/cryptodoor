<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use App\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsUpdateController extends Controller
{
    public function news()
    {
        $news = NewsUpdate::latest()->get();
        $featured = NewsUpdate::where('featured', 1)->paginate(5);
        return view('dashboard.news-update', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = NewsUpdate::findOrFail($id);
        $news = NewsUpdate::latest()->paginate(5);
        $featured = NewsUpdate::where('featured', 1)->paginate(5);

        if (Auth::user()->confirm_payment <= 1)
        {
            return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.news.details', compact('post', 'news', 'featured'));
        }
    }
}
