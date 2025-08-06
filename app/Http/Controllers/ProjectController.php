<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('dashboard.project.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('upload/')  : null;

        Project::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $path,
        ]);

        return redirect()->back()->with('success', 'Project added successfully.');
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $project->image =  $request->file('image')->store('upload/');
        }

        $project->update($request->only('title', 'short_description', 'long_description'));

        return redirect()->back()->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }

        $project->delete();

        return redirect()->back()->with('success', 'Project deleted successfully.');
    }
}
