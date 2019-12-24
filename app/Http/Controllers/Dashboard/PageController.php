<?php

namespace App\Http\Controllers\Dashboard;

use App\HomePage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $testimonials = HomePage::all();

        return view('dashboard.pages.index', compact('user', 'testimonials'));
    }

    public function create()
    {
        $user = Auth::user();

        return view('dashboard.pages.home-page', compact('user'));
    }

    public function store(Request $request)
    {
        HomePage::create($request->all());
//        dd($data);

        return redirect()->back()->with('success', 'The testimonial has been added');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $data = HomePage::find($id);
        return view('dashboard.pages.edit', compact('user', 'data'));
    }

    public function update(Request $request, $id)
    {
        $editPage = HomePage::find($id);
        $editPage->title = $request->input('title');
        $editPage->desc = $request->input('desc');
        $editPage->test_name = $request->input('test_name');
        $editPage->test_job = $request->input('test_job');
        $editPage->test_graph = $request->input('test_graph');

        $editPage->save();

        return redirect()->back()->with('success', 'The testimonial has been edited');
    }

    public function destroy($id)
    {
        HomePage::find($id)->delete();

        return back()->with('success', 'The testimonial has been deleted');
    }
}
