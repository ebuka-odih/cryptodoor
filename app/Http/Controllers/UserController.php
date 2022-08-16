<?php

namespace App\Http\Controllers;

use App\CryptoNews;
use App\NewsUpdate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $featured = CryptoNews::where('featured', 1)->paginate(5);
        $featured_news = NewsUpdate::where('featured', 1)->paginate(5);
        return view('dashboard.index', compact('featured', 'featured_news'));
    }
}
