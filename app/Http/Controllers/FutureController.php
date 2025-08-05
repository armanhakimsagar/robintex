<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// app/Http/Controllers/FutureController.php
use App\Models\Future;

class FutureController extends Controller
{
    public function index()
    {
        $futures = Future::latest()->get();
        return view('dashboard.future.index', compact('futures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'counts' => 'nullable|array',
            'counts.*.count' => 'required|numeric',
            'counts.*.title' => 'required|string',
        ]);

        $path = $request->file('image')?->store('future', 'public');

        Future::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $path,
            'counts' => $request->counts,
        ]);

        return back()->with('success', 'Future added!');
    }

    public function update(Request $request, $id)
    {
        $future = Future::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image',
            'counts' => 'nullable|array',
            'counts.*.count' => 'required|numeric',
            'counts.*.title' => 'required|string',
        ]);

        $path = $future->image;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('future', 'public');
        }

        $future->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $path,
            'counts' => $request->counts,
        ]);

        return back()->with('success', 'Future updated!');
    }

    public function destroy($id)
    {
        $future = Future::findOrFail($id);
        $future->delete();
        return back()->with('success', 'Future deleted!');
    }
}
