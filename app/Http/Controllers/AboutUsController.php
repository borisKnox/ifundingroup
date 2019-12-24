<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function index(){
        $user = Auth::user();

        return view('frontend.about-us', compact('user'));
    }
}
