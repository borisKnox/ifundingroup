<?php

// SubscriptionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class SubscriptionController extends Controller
{
    public function create(Request $request, Plan $plan)
    {
        $request->user()->createAsStripeCustomer();
        $plan = Plan::findOrFail($request->get('plan'));
        $request->user()
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);
        
        return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
    }
    public function testcreate(Request $request)
    {
        
        return view('checkout')->with('success', 'Your plan subscribed successfully');
    }
    public function createcustomer(Request $request)
    {
        dd($request->all());
        return view('checkout')->with('success', 'Your plan subscribed successfully');
    }
}