<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Recommendation;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frameworks = Technology::where('is_framework', 1)->get();
        $tools = Technology::where('is_framework', 0)->get();

        $projects = Project::with(['files' => function ($query) {
            $query->where('is_preview', true);
        }, 'technologies'])
            ->get(['id', 'name']);;

        $ratings = Recommendation::all();
        $experinces = Experience::all();
        $educations = Education::all();
        return view('home.pages.index', compact(
            'frameworks',
            'tools',
            'projects',
            'ratings',
            'experinces',
            'educations'
        ));
    }

    public function project($id)
    {
        $project = Project::with('files')->findOrFail($id);
        return view('home.pages.project', compact('project'));
    }
}
