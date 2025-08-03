<?php
namespace App\Http\Controllers;

use App\Models\TopElement;
use Illuminate\Http\Request;

class TopElementController extends Controller
{
    public function index()
    {
        $data = TopElement::pluck('value', 'key')->toArray();
        return view('dashboard.top-element', compact('data'));
    }

    public function update(Request $request, $key)
    {
        $request->validate([
            'value' => 'required|string|max:255',
        ]);

        TopElement::updateOrCreate(
            ['key' => $key],
            ['value' => $request->value]
        );
        if ($request->hasFile('value')) {
            $path = $request->file('value')->store('logos', 'public');
            $value = $path;
        } else {
            $value = $request->input('value');
        }
        
        return back()->with('success', ucfirst($key).' updated successfully.');
    }
}
