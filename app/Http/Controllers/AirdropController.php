<?php

namespace App\Http\Controllers;

use App\Airdrop;
use App\CryptoNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AirdropController extends Controller
{
    public function airdrop()
    {
        if (Auth::user()->confirm_payment <= 1){
            return redirect()->route('user.membershipPlan');
        }
        $news = Airdrop::latest()->get();
        $featured = Airdrop::where('featured', 1)->paginate(5);
        return view('dashboard.airdrop.news', compact('news', 'featured'));
    }

    public function show($id)
    {
        $post = Airdrop::findOrFail($id);
        $news = Airdrop::latest()->paginate(5);
        $featured = Airdrop::where('featured', 1)->paginate(5);

        if (Auth::user()->confirm_payment <= 1)
        {
            return redirect()->route('user.membershipPlan');
        }else{
            return view('dashboard.airdrop.details', compact('post', 'news', 'featured'));
        }
    }

}
