<?php

namespace App\Http\Controllers\Dashboard;

use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('frontend.contact-us', compact('user'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('up_file')) {
            // upload 'up' file for the user
            $request['file'] = $request->file('up_file')->store('files', 'public');
        } else {
            // to set default value for 'avatar' if no image has been uploaded
            $request['file'] = null;
        }

        ContactUs::create($request->all());


        return redirect()->back()->with('success', 'The message has been sent');

    }

    public function view()
    {
        $user = Auth::user();

        $messages = ContactUs::all();

        return view('dashboard.contact-us', compact('user', 'messages'));
    }

    public function destroy($id)
    {
        ContactUs::find($id)->delete();

        return back()->with('success', 'The message has been deleted');
    }
}
