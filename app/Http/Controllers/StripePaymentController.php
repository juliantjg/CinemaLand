<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function stripe()
    {
        $price = request()->price;
        $movie_name = request()->movie_name;
        return view('stripe.stripe', compact('movie_name', 'price'));
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => request('price') * 100,
            "currency" => "aud",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);


        return redirect('/home/')->with([
            'message_success' => "Purchase successful!"
        ]);
    }
}