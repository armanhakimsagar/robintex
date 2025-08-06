<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portfolio = Portfolio::first();

        if ($request->isMethod('post')) {
            $request->validate([
                'description' => 'required|string',
            ]);

            $portfolio = Portfolio::updateOrCreate(
                ['id' => 1],
                ['description' => $request->description]
            );

            return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully.');
        }

        return view('dashboard.portfolio.index', compact('portfolio'));
    }
}

