<?php
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
        }

        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Team member added successfully!');
    }


    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|dimensions:width=300,height=300|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) Storage::disk('public')->delete($team->image);
            $team->image = $request->file('image')->store('team', 'public');
        }

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $team->image,
        ]);

        return back()->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        if ($team->image) Storage::disk('public')->delete($team->image);
        $team->delete();
        return back()->with('success', 'Team member deleted.');
    }
}
