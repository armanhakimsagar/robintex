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

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUsPage::first();
        return view('dashboard.page.about', compact('about'));
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
}

