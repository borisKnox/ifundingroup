<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessLoanController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('frontend.business-loan', compact('user'));
    }
}
