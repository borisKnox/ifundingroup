<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Loan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('dashboard.dashboard', compact('user'));
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
        return view('dashboard.earning-history', compact('user'));
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
        return view('dashboard.invest', compact('user'));
    }
    public function lenderRequest(Request $request){
        $user = Auth::user();
        $success = 'success';
        return view('dashboard.invest', compact('user','success'));
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
        $loan->prj_expiry_date = $request->input('prj_expiry_date');
        $loan->prj_target = $request->input('prj_target');
        if (!is_null($prj_file)) {
            $loan->prj_file = $prj_file;
        }
        $loan->save();
        $success = 'success';
        return view('dashboard.borrower-now', compact('user','success'));
    }

    public function withdrawal(){
        $user = Auth::user();
        return view('dashboard.withdrawal', compact('user'));
    }
}
