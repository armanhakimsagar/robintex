<?php
namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::all();
        return view('dashboard.missions.index', compact('missions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time().'_'.$icon->getClientOriginalName();
            $icon->move(public_path('uploads/missions'), $iconName);
            $data['icon'] = 'uploads/missions/' . $iconName;
        }

        Mission::create($data);

        return redirect()->route('missions.index')->with('success', 'Mission added successfully.');
    }

    public function edit($id)
    {
        $mission = Mission::findOrFail($id);
        return view('dashboard.missions.edit', compact('mission'));
    }

    public function update(Request $request, $id)
    {
        $mission = Mission::findOrFail($id);

        $request->validate([
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ]);

        $data = $request->only(['title', 'short_description', 'long_description']);

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time().'_'.$icon->getClientOriginalName();
            $icon->move(public_path('uploads/missions'), $iconName);
            $data['icon'] = 'uploads/missions/' . $iconName;
        }

        $mission->update($data);

        return redirect()->route('missions.index')->with('success', 'Mission updated.');
    }

    public function destroy($id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();
        return redirect()->route('missions.index')->with('success', 'Mission deleted.');
    }
}
