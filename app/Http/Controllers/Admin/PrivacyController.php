<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    public function index()
    {
        $privacies = Privacy::orderBy('id')->get();
        return view('admin.privacies.index', compact('privacies'));
    }

    public function create()
    {
        return view('admin.privacies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Privacy::create($request->all());

        return redirect()->route('admin.privacies.index')
            ->with('success', 'Privacy policy created successfully');
    }

    public function show(Privacy $privacy)
    {
        return view('admin.privacies.show', compact('privacy'));
    }

    public function edit(Privacy $privacy)
    {
        return view('admin.privacies.edit', compact('privacy'));
    }

    public function update(Request $request, Privacy $privacy)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $privacy->update($request->all());

        return redirect()->route('admin.privacies.index')
            ->with('success', 'Privacy policy updated successfully');
    }

    public function destroy(Privacy $privacy)
    {
        $privacy->delete();

        return redirect()->route('admin.privacies.index')
            ->with('success', 'Privacy policy deleted successfully');
    }
}
