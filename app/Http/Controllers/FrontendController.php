<?php
namespace App\Http\Controllers;

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

class FrontendController extends Controller
{
    public function index()
    {
        $futures = Future::all();
        $goals = Goal::all();
        $missions = Mission::all();
        $projects = Project::all();
        $teams = Team::all();
        $topBanner = TopBanner::latest()->first(); // Assuming only one active
        $topElements = TopElement::all();
        $topFeatures = TopFeature::all();
        $whyChooseUs = WhyChooseUs::latest()->first(); // Assuming only one
        $whyChooseUsReasons = WhyChooseUsReason::all();

        return view('index', compact(
            'futures',
            'goals',
            'missions',
            'projects',
            'teams',
            'topBanner',
            'topElements',
            'topFeatures',
            'whyChooseUs',
            'whyChooseUsReasons'
        ));
    }
}
