<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contact = Contact::first();

        if ($request->isMethod('post')) {
            $request->validate([
                'description' => 'required|string',
            ]);

            $contact = Contact::updateOrCreate(
                ['id' => 1],
                ['description' => $request->description]
            );

            return redirect()->route('contact.index')->with('success', 'Contact Us updated successfully.');
        }

        return view('dashboard.contact.index', compact('contact'));
    }
}
