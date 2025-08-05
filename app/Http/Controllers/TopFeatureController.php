<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopFeature;

class TopFeatureController extends Controller
{
    public function index()
    {
        $features = TopFeature::latest()->get();
        return view('dashboard.top-feature', compact('features'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $feature = new TopFeature();
        $feature->title = $request->title;
        $feature->short_description = $request->short_description;
        $feature->long_description = $request->long_description;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = 'icon_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $feature->icon = $filename;
        }

        $feature->save();

        return redirect()->back()->with('success', 'Feature added successfully.');
    }

    public function update(Request $request, $id)
    {
        $feature = TopFeature::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $feature->title = $request->title;
        $feature->short_description = $request->short_description;
        $feature->long_description = $request->long_description;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = 'icon_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $feature->icon = $filename;
        }

        $feature->save();

        return redirect()->back()->with('success', 'Feature updated successfully.');
    }

    public function delete($id)
    {
        $feature = TopFeature::findOrFail($id);

        if ($feature->icon && file_exists(public_path('uploads/' . $feature->icon))) {
            unlink(public_path('uploads/' . $feature->icon));
        }

        $feature->delete();

        return redirect()->back()->with('success', 'Feature deleted successfully.');
    }
}
