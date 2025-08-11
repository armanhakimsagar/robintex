<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopBanner;

class TopBannerController extends Controller
{
    public function index()
    {
        $data = TopBanner::pluck('value', 'key')->toArray();
        return view('dashboard.top-banner', compact('data'));
    }
    public function update(Request $request, $key)
    {
        if ($key === 'banner_image') {
            $request->validate([
                'value' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Find old record
            $oldRecord = TopBanner::where('key', $key)->first();

            // Delete old file if exists
            if ($oldRecord && $oldRecord->value && \Storage::disk('public')->exists($oldRecord->value)) {
                \Storage::disk('public')->delete($oldRecord->value);
            }

            // Store new file
            $imagePath = $request->file('value')->store('upload', 'public');
            $value = $imagePath;

        } else {
            $request->validate(['value' => 'required']);
            $value = $request->input('value');
        }

        TopBanner::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        return back()->with('success', ucfirst(str_replace('_', ' ', $key)) . ' updated.');
    }

    
}
