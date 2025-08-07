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
            $imagePath = $request->file('image')->store('upload', 'public');
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
            'image' => 'nullable|image|max:2048',
        ]);
    
        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
        ];
    
        if ($request->hasFile('image')) {
            // Delete old image
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }
    
            // Store new image
            $data['image'] = $request->file('image')->store('upload', 'public');
        }
    
        $team->update($data);
    
        return back()->with('success', 'Team member updated successfully.');
    }
    
    public function destroy(Team $team)
    {
        if ($team->image) Storage::delete($team->image);
        $team->delete();
        return back()->with('success', 'Team member deleted.');
    }
}
