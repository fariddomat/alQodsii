<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        $about = About::first();
        return view('admin.about.create', compact('about'));
    }

    public function store(Request $request)
    {
        $rules = [
            'about_me' => ['required'],
            'quality_safty' => ['required'],
            'who' => ['required'],
            'history' => ['required'],
            'massage' => ['required'],
            'goals' => ['required'],
            'vision' => ['required'],
            'ambition' => ['required'],
        ];
        $validatedData = $request->validate($rules);

        $about =  About::find(1);
        if (is_null($about)) {
            $about = new About();
        }

        $about->about_me = $validatedData['about_me'];
        $about->quality_safty = $validatedData['quality_safty'];
        $about->who_are_we = $validatedData['who'];
        $about->history = $validatedData['history'];
        $about->massage = $validatedData['massage'];
        $about->goals = $validatedData['goals'];
        $about->vision = $validatedData['vision'];
        $about->ambition = $validatedData['ambition'];
        $about->save();
        session()->flash('success', 'About Updated Successfully');
        return redirect()->back();
    }
}
