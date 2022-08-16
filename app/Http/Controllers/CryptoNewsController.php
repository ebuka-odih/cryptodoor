<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use App\NewsUpdate;
use Illuminate\Http\Request;

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
        $new = CryptoNews::findOrFail($id);
        return view('dashboard.news.details', compact('new'));
    }
}
