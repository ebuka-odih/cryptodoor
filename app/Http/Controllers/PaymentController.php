<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shakurov\Coinbase\Facades\Coinbase;
use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class PaymentController extends Controller
{
    public function membershipPlan()
    {
        return view('dashboard.payment.membership');
    }
    public function payment(Request $request){

        $plan = $request->plan;
        $price = $request->price;
        $charge = Coinbase::createCharge([
            'name' => $request->plan,
            'description' => 'Subscribe to '.$request->plan,
            'local_price' => [
                'amount' => $request->price,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
        ]);
//        return $charge;
        $user = Auth()->user();
        $user['payment_code'] = $charge['data']['code'];
        $user->save();
        return redirect($charge['data']['hosted_url']) ;
    }

    public function createCharge($id){

        $charge = Coinbase::createCharge([
            'name' => 'Cryptodoor Membership Fee',
            'description' => 'Subscribe to Cryptodoor Membership',
            'local_price' => [
                'amount' => 0.99,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
        ]);
        $user = User::findOrFail($id);
        $user['payment_code'] = $charge['data']['code'];
        $user->save();
        return response()->json($charge);
    }

    public function confirmCharge(CoinbaseWebhookCall $webhookCall)
    {
        return $webhookCall;
        $payload = $request->getContent();
        return $payload->event;
//        $code = $payload['event']['data']['code'];
        $code = $payload->event['data']['code'];
        $user = User::wherePaymentCode($code)->first();
        $user->confirm_payment = 1;
        $user->save();
        return $user;
    }

}
