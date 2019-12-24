<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('dashboard.dashboard', compact('user'));
    }

    public function earningHistory(){
        $user = Auth::user();
        return view('dashboard.earning-history', compact('user'));
    }

    public function lendNow(){
        $user = Auth::user();
        return view('dashboard.lend-now', compact('user'));
    }

    public function borrowerNow(){
        $user = Auth::user();
        return view('dashboard.borrower-now', compact('user'));
    }

    public function withdrawal(){
        $user = Auth::user();
        return view('dashboard.withdrawal', compact('user'));
    }
}
