<?php

namespace App\Http\Controllers\Admin;

use App\CryptoNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCryptoNewsController extends Controller
{
    public function index()
    {
        $news = CryptoNews::all();
        return view('admin.news.list', compact('news'));
    }

    public function create()
    {
        return view('admin.news.add');
    }

}
