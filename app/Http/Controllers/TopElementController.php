<?php
namespace App\Http\Controllers;

use App\Models\TopElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TopElementController extends Controller
{
    public function index()
    {
        $data = TopElement::pluck('value', 'key')->toArray();
        return view('dashboard.top-element', compact('data'));
    }

    public function update(Request $request, $key)
    {
        if ($key === 'logo') {
            $request->validate([
                'value' => 'required|file|mimes:jpeg,jpg,png,svg|max:2048',
            ], [], ['value' => 'value_logo']);

            $path = $request->file('value')->store('upload', 'public');
            TopElement::updateOrCreate(['key' => $key], ['value' => $path]);

            return back()->with('success', 'Logo updated successfully.');
        }

        $rules = ['value' => 'required|string|max:255'];

        if ($key === 'email') {
            $rules['value'] = 'required|email';
        }

        if ($key === 'phone') {
            $rules['value'] = ['required', 'regex:/^(?:\+88|88)?01[3-9]\d{8}$/'];
        }

        // Run manual validation so we can customize error keys
        $validator = Validator::make($request->all(), [
            'value' => $rules['value'],
        ], [
            'value.required' => ucfirst($key) . ' is required.',
            'value.email' => 'Enter a valid email address.',
            'value.regex' => 'Enter a valid Bangladeshi phone number.',
        ]);

        // Rename error key to match field name in blade (e.g., value_email, value_phone)
        $customFieldKey = 'value_' . $key;
        if ($validator->fails()) {
            return back()
                ->withErrors([$customFieldKey => $validator->errors()->first('value')])
                ->withInput();
        }

        TopElement::updateOrCreate(['key' => $key], ['value' => $request->value]);

        return back()->with('success', ucfirst($key) . ' updated successfully.');
    }

    
    
}
