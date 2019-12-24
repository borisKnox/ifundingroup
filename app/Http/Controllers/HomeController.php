<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $pages = HomePage::all();

        $first = HomePage::first();
//        dd($first);
//        dd($pages);
        return view('frontend.index',compact('user', 'pages','first'));
    }

    public function investMoney(){
        $user = Auth::user();

        return view('frontend.invest-money', compact('user'));
    }

}
