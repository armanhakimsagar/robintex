<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopFeature;
use Illuminate\Support\Facades\Storage;

class TopFeatureController extends Controller
{
    public function index()
    {
        $feature = TopFeature::first();
        return view('dashboard.top-feature', compact('feature'));
    }

    public function update(Request $request, $field)
    {
        $feature = TopFeature::first() ?? new TopFeature();

        $validated = $request->validate([
            'value' => $field === 'icon' ? 'required|image|mimes:png,jpg,jpeg,svg|max:2048' : 'required|string',
        ]);

        if ($field === 'icon') {
            $request->validate([
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
        
            $file = $request->file('icon');
            $filename = 'icon_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
    
            $topFeature->icon = $filename;
            $topFeature->save();
        } else {
            $feature->{$field} = $validated['value'];
        }

        $feature->save();
        return redirect()->back()->with('success', ucfirst($field) . ' updated successfully.');
    }
}