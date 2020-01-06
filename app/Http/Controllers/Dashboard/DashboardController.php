<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Stripe;
use App\User;
use App\Loan;
use App\Investment;
use App\Withdrawal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $loan = Loan::where('userid',$user->id)->get();
        $investment = Investment::where('userid',$user->id)->get();
        return view('dashboard.dashboard', compact('user','loan','investment'));
    }

    public function money(){
        $user = Auth::user();
        return view('dashboard.money', compact('user'));
    }

    public function old(){
        $user = Auth::user();
        return view('dashboard.dashboard-old', compact('user'));
    }

    public function earningHistory(){
        $user = Auth::user();
        $loan = Loan::where('userid',$user->id)->get();
        $investment = Investment::where('userid',$user->id)->get();
        $withdrawal = Withdrawal::where('userid',$user->id)->get();

        return view('dashboard.earning-history', compact('user','investment','withdrawal','loan'));
    }
    public function appsetting(){
        $user = Auth::user();
        return view('dashboard.appsetting', compact('user'));
    }

    public function lendNow(){
        $user = Auth::user();
        $loans = Loan::all();
        return view('dashboard.lend-now', compact('user','loans'));
    }

    public function borrowerNow(){
        $user = Auth::user();
        return view('dashboard.borrower-now', compact('user'));
    }
    public function invest($id){
        $user = Auth::user();
        $sid=$id;
        return view('dashboard.invest', compact('user','sid'));
    }
    public function lenderRequest(Request $request){
        $user = Auth::user();
        $sid = $request->input('id');
        $investment = new Investment;
        
        $investment->firstname = $request->input('firstname');
        $investment->email = $request->input('email');
        $investment->lastname = $request->input('lastname');

        $investment->phone = $request->input('phone');
        $investment->card_name = $request->input('card_name');
        $investment->card_number = $request->input('card_number');
        $investment->card_expiration = $request->input('card_expiry_date');
        $investment->payment1 = $request->input('payment1');
        $investment->payment2 = $request->input('payment2');
        $investment->invest_expiration = $request->input('prj_expiry_date');
        $investment->amout = $request->input('prj_target');
        $investment->loanid = $request->input('id');
        $investment->bankname = $request->input('bankname');
        $investment->userid = $user->id;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
        $product = Stripe\Product::create([
            'name' => 'My SaaS Platform',
            'type' => 'service',
        ]);

        $plan = Stripe\Plan::create([
            'currency' => 'usd',
            'interval' => 'month',
            'product' => $product->id,
            'nickname' => 'Pro Plan',
            'amount' => 3000,
        ]);
        
        $customer = Stripe\Customer::create([
            'description' => 'Customer for jenny.rosen@example.com',
            "source" => $request->stripeToken,
        ]);
        
        $sui = Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['plan' => $plan->id]],
        ]);
        dd($sui);        
        $charge=Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com." 
        ]);
        $investment->chkey = $charge->id;

        $investment->save();
        $success = 'success';
        return view('dashboard.invest', compact('user','success','sid'));
    }
    public function borrowerRequest(Request $request){
        
        $user = Auth::user();
        
        $loan = new Loan;
        $prj_file = null;
        if ($request->hasFile('prj_file')) {
            // upload 'avatar' image for the user
            $prj_file = $request->file('prj_file')->store('prj_file','public');
        }

        $loan->firstname = $request->input('firstname');
        $loan->email = $request->input('email');
        $loan->lastname = $request->input('lastname');
        $loan->citisencard = $request->input('citisencard');

        $loan->phone = $request->input('phone');
        $loan->gender = $request->input('gender');
        $loan->address = $request->input('address');
        $loan->city = $request->input('city');
        $loan->remarks = $request->input('remarks');
        $loan->card_name = $request->input('card_name');
        $loan->card_number = $request->input('card_number');
        $loan->card_expiry_date = $request->input('card_expiry_date');
        $loan->payment1 = $request->input('payment1');
        $loan->payment2 = $request->input('payment2');
        $loan->prjname = $request->input('prjname');
        $loan->itsrate = $request->input('itsrate');
        $loan->ltv = $request->input('ltv');
        $loan->trmon = $request->input('trmon');
        $loan->method = $request->input('paymethod');
        $loan->prj_expiry_date = $request->input('prj_expiry_date');
        $loan->prj_target = $request->input('prj_target');
        $loan->userid = $user->id;
        $pk=Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge=Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        if (!is_null($prj_file)) {
            $loan->prj_file = $prj_file;
        }
        $loan->save();
        $success = 'success';
        return view('dashboard.borrower-now', compact('user','success'));
    }

    public function withdrawal(){
        $user = Auth::user();
        $investment = Investment::where('userid',$user->id)->get();
        
        return view('dashboard.withdrawal', compact('user','investment'));
    }
    public function withdrawlist($id){
        $user = Auth::user();
        $withdrawal = new Withdrawal;
        $withdrawal->investid = $id;
        $withdrawal->userid = $user->id;
        $withdrawal->save();
        $investment = Investment::where('id',$id)->first();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $refund = Stripe\Refund::create([
            'charge' => $investment->chkey,
        ]);
        // dd($refund);
        $success = 'success';
        return view('dashboard.withdrawalinvoice', compact('user','investment','success'));
    }
    public function withdrawinvoice($id){
        $user = Auth::user();
        $investment = Investment::where('id',$id)->first();
        
        return view('dashboard.withdrawalinvoice', compact('user','investment'));
    }
}
