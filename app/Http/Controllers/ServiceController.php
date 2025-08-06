<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required|max:500',
            'long_description' => 'required',
        ]);

        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required|max:500',
            'long_description' => 'required',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
