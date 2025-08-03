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
            $image = $request->file('value');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $value = 'uploads/' . $imageName;
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
