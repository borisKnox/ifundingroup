<?php

namespace App\Http\Controllers\Dashboard;

use App\Career;
use App\Resume;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $openings = Career::all();

        $resumes = Resume::all();

        return view('dashboard.careers.careers', compact('user', 'openings', 'resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('dashboard.careers.create', compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Career::create($request->all());

        return redirect()->back()->with('success', 'The open has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $career = Career::find($id);

        return view('dashboard.careers.edit', compact('user', 'career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career = Career::find($id);
        $career->title = $request->input('title');
        $career->content = $request->input('content');

        $career->save();

        return back()->with('success', 'user career has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Career::find($id)->delete();

        return back()->with('success', 'Career has been deleted');
    }


    public function view(){
        $user = Auth::user();
        $careers = Career::all();

        return view('frontend.careers', compact('user', 'careers'));
    }

    public function insert(Request $request)
    {
        if ($request->hasFile('file')) {
            // upload 'up' file for the user
            $request['up_file'] = $request->file('file')->store('files', 'public');
        } else {
            // to set default value for 'avatar' if no image has been uploaded
            $request['up_file'] = null;
        }
        Resume::create($request->all());
    //        dd($test);


        return redirect()->back()->with('success', 'The file has been uploaded');
    }



    public function delete($id){
        Resume::find($id)->delete();

        return back()->with('success', 'Resume has been deleted');
    }
}
