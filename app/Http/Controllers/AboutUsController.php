<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
use App\Models\Service;
use App\Models\AboutUsPage;
use App\Models\JourneyPage;
use App\Models\LeadershipPage;
use App\Models\ClientPage;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUsPage::first();
        return view('dashboard.page.about', compact('about'));
    }

    
    public function journeyd()
    {
        $about = JourneyPage::first();
        return view('dashboard.page.journey', compact('about'));
    }

    
    public function leadershipd()
    {
        $about = LeadershipPage::first();
        return view('dashboard.page.leadership', compact('about'));
    }

    
    public function clientd()
    {
        $about = ClientPage::first();
        return view('dashboard.page.client', compact('about'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'banner_one' => 'nullable|image|max:2048',
            'banner_two' => 'nullable|image|max:2048',
            'banner_three' => 'nullable|image|max:2048',
        ]);
    
        $data = $request->only('description');
    
        foreach (['banner_one', 'banner_two', 'banner_three'] as $banner) {
            if ($request->hasFile($banner)) {
                $data[$banner] = $request->file($banner)->store('upload', 'public');
            }
        }
    
        // Check if AboutUsPage already has a record
        $aboutUs = AboutUsPage::first();
    
        if ($aboutUs) {
            // update existing record
            $aboutUs->update($data);
        } else {
            // create new record
            AboutUsPage::create($data);
        }
    
        return back()->with('success', 'About Us updated successfully.');
    }
   
    
    
    public function journeyStore(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'banner_one' => 'nullable|image|max:2048'
        ]);
    
        $data = html_entity_decode($request->only('description'));
    
        foreach (['banner_one'] as $banner) {
            if ($request->hasFile($banner)) {
                $data[$banner] = $request->file($banner)->store('upload', 'public');
            }
        }
    
        // Check if AboutUsPage already has a record
        $aboutUs = JourneyPage::first();
    
        if ($aboutUs) {
            // update existing record
            $aboutUs->update($data);
        } else {
            // create new record
            JourneyPage::create($data);
        }
    
        return back()->with('success', 'Journey updated successfully.');
    }

    
    public function clientStore(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string'
        ]);
    
        $data = $request->only('description');
    
        // Check if AboutUsPage already has a record
        $aboutUs = ClientPage::first();
    
        if ($aboutUs) {
            // update existing record
            $aboutUs->update($data);
        } else {
            // create new record
            ClientPage::create($data);
        }
    
        return back()->with('success', 'Client updated successfully.');
    }

    
    public function leadershipStore(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string'
        ]);
    
        $data = $request->only('description');
    
        // Check if AboutUsPage already has a record
        $aboutUs = LeadershipPage::first();
    
        if ($aboutUs) {
            // update existing record
            $aboutUs->update($data);
        } else {
            // create new record
            LeadershipPage::create($data);
        }
    
        return back()->with('success', 'Leadership updated successfully.');
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
        
        return view('dashboard.frontend.about', compact(
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

    
    public function client()
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
        $aboutUsPage = ClientPage::all();
        
        return view('dashboard.frontend.client', compact(
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

    
    public function journey()
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
        $aboutUsPage = JourneyPage::all();
        
        return view('dashboard.frontend.journey', compact(
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

    
    public function leadership()
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
        $aboutUsPage = LeadershipPage::all();
        
        return view('dashboard.frontend.leadership', compact(
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
    
    
    
}

