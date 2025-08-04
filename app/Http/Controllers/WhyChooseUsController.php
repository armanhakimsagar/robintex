<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseUs;
use App\Models\WhyChooseUsReason;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    public function index()
    {
        $why = WhyChooseUs::first();
        $reasons = $why ? $why->reasons : [];
        return view('dashboard.why.index', compact('why', 'reasons'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $why = WhyChooseUs::firstOrNew();
        $why->fill($request->only('title', 'description'))->save();

        return back()->with('success', 'Why Choose Us updated!');
    }

    public function addReason(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('uploads', 'public');
        }

        $why = WhyChooseUs::first();
        $data['why_choose_us_id'] = $why->id ?? null;

        WhyChooseUsReason::create($data);

        return back()->with('success', 'Reason added!');
    }

    public function updateReason(Request $request, $id)
    {
        $reason = WhyChooseUsReason::findOrFail($id);
        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('uploads', 'public');
        }

        $reason->update($data);

        return back()->with('success', 'Reason updated!');
    }

    public function deleteReason($id)
    {
        $reason = WhyChooseUsReason::findOrFail($id);
        $reason->delete();
        return back()->with('success', 'Reason deleted!');
    }
}

