<?php
// app/Http/Controllers/GoalController.php
namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        return view('dashboard.goal.index', compact('goals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);
        $iconPath = $request->file('icon')->store('upload', 'public');

        Goal::create([
            'icon' => $iconPath,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return back()->with('success', 'Goal added successfully.');
    }

    public function destroy(Goal $goal)
    {
        if ($goal->icon && Storage::disk('public')->exists($goal->icon)) {
            Storage::disk('public')->delete($goal->icon);
        }

        $goal->delete();
        return back()->with('success', 'Goal deleted successfully.');
    }

    public function update(Request $request, Goal $goal)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'image|mimes:png,jpg,jpeg|max:1024',
            ]);
            if ($goal->icon && Storage::disk('public')->exists($goal->icon)) {
                Storage::disk('public')->delete($goal->icon);
            }
            $iconPath = $request->file('icon')->store('upload');
            $goal->icon = $iconPath;
        }

        $goal->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return back()->with('success', 'Goal updated successfully.');
    }
}
