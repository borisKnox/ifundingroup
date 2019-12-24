<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HowToWorkController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('frontend.how-work.index' , compact('user'));
    }

    public function notDow(){
        $user = Auth::user();
        return view('frontend.how-work.what-does-funding-not-do' , compact('user'));
    }

    public function bidProcess(){
        $user = Auth::user();
        return view('frontend.how-work.the-bidding-process' , compact('user'));
    }

    public function transFunds(){
        $user = Auth::user();
        return view('frontend.how-work.transfer-of-funds-and-emi-payments' , compact('user'));
    }

    public function refund(){
        $user = Auth::user();
        return view('frontend.how-work.cancellation-and-refund-policy' , compact('user'));
    }

    public function lenders(){
        $user = Auth::user();
        return view('frontend.lenders.why-lend' , compact('user'));
    }

    public function becomeLend(){
        $user = Auth::user();
        return view('frontend.lenders.who-can-become-a-lender' , compact('user'));
    }

    public function lendToBe(){
        $user = Auth::user();
        return view('frontend.lenders.who-am-i-lending-to' , compact('user'));
    }

    public function returnFees(){
        $user = Auth::user();
        return view('frontend.lenders.returns-and-fees' , compact('user'));
    }
    public function conductLenders(){
        $user = Auth::user();
        return view('frontend.lenders.code-of-conduct-for-lenders' , compact('user'));
    }

    public function faq(){
        $user = Auth::user();
        return view('frontend.lenders.funding-faq' , compact('user'));
    }

    public function whyBorrow(){
        $user = Auth::user();
        return view('frontend.borrowers.why-borrow-on-funding' , compact('user'));
    }

    public function qualLoan(){
        $user = Auth::user();
        return view('frontend.borrowers.who-qualifies-for-a-loan' , compact('user'));
    }

    public function whomBorrow(){
        $user = Auth::user();
        return view('frontend.borrowers.from-whom-am-i-borrowing' , compact('user'));
    }

    public function borrowerProcess(){
        $user = Auth::user();
        return view('frontend.borrowers.borrower-process' , compact('user'));
    }

    public function purposeLoan(){
        $user = Auth::user();
        return view('frontend.borrowers.purpose-of-loan' , compact('user'));
    }

    public function insertFees(){
        $user = Auth::user();
        return view('frontend.borrowers.interest-rates-and-fees' , compact('user'));
    }



}
