<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use Illuminate\Http\Request;

class CryptoNewsController extends Controller
{
    public function news()
    {
        $news = CryptoNews::all();
        return view('dashboard.news.news', compact('news'));
    }
}
