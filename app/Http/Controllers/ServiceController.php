<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Future;
use App\Models\Goal;
use App\Models\Mission;
use App\Models\Project;
use App\Models\Team;
use App\Models\TopBanner;
use App\Models\TopElement;
use App\Models\TopFeature;
use App\Models\WhyChooseUs;
use App\Models\WhyChooseUsReason;
use App\Models\AboutUsPage;
use App\Models\Portfolio;
use App\Models\Contact;

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


    
    public function show()
    {
        
        $futures = Future::all();
        $goals = Goal::all();
        $missions = Mission::all();
        $projects = Project::all();
        $services = Service::all();
        $teams = Team::all();
        $topBanner = TopBanner::all();
        $topElements = TopElement::all();
        $topFeatures = TopFeature::all();
        $whyChooseUs = WhyChooseUs::latest()->first(); // Assuming only one
        $whyChooseUsReasons = WhyChooseUsReason::all();        
        $aboutUsPage = AboutUsPage::all();
        
        return view('dashboard.frontend.service', compact(
            'futures',
            'goals',
            'missions',
            'projects',
            'teams',
            'topBanner',
            'topElements',
            'topFeatures',
            'whyChooseUs',
            'whyChooseUsReasons',
            'services',
            'aboutUsPage'
        ));
    }

    public function portfolio(){
        $futures = Future::all();
        $goals = Goal::all();
        $missions = Mission::all();
        $projects = Project::all();
        $services = Service::all();
        $teams = Team::all();
        $topBanner = TopBanner::all();
        $topElements = TopElement::all();
        $topFeatures = TopFeature::all();
        $whyChooseUs = WhyChooseUs::latest()->first(); // Assuming only one
        $whyChooseUsReasons = WhyChooseUsReason::all();        
        $aboutUsPage = AboutUsPage::all();
        $portfolio = Portfolio::all();
        
        return view('dashboard.frontend.portfolio', compact(
            'futures',
            'goals',
            'missions',
            'projects',
            'teams',
            'topBanner',
            'topElements',
            'topFeatures',
            'whyChooseUs',
            'whyChooseUsReasons',
            'services',
            'aboutUsPage',
            'portfolio'
        ));
    }

    public function contact(){
        $futures = Future::all();
        $goals = Goal::all();
        $missions = Mission::all();
        $projects = Project::all();
        $services = Service::all();
        $teams = Team::all();
        $topBanner = TopBanner::all();
        $topElements = TopElement::all();
        $topFeatures = TopFeature::all();
        $whyChooseUs = WhyChooseUs::latest()->first(); // Assuming only one
        $whyChooseUsReasons = WhyChooseUsReason::all();        
        $aboutUsPage = AboutUsPage::all();
        $contact = Contact::all();
        
        return view('dashboard.frontend.Contact', compact(
            'futures',
            'goals',
            'missions',
            'projects',
            'teams',
            'topBanner',
            'topElements',
            'topFeatures',
            'whyChooseUs',
            'whyChooseUsReasons',
            'services',
            'aboutUsPage',
            'contact'
        ));
    }
}
