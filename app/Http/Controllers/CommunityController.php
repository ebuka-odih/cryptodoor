<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function community()
    {
        if (Auth::user()->confirm_payment <= 1){
            return redirect()->route('user.membershipPlan');
        }
        return view('dashboard.community');
    }
}
