<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Recommendation;
use App\Models\Technology;
use App\Models\User;
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
        $user = User::first();
        $contacts = Contact::all();
        return view('home.pages.index', compact(
            'frameworks',
            'tools',
            'projects',
            'ratings',
            'experinces',
            'educations',
            'user',
            'contacts'
        ));
    }

    public function project($id)
    {
        $project = Project::with('files')->findOrFail($id);
        return view('home.pages.project', compact('project'));
    }

    public function contact(Request $request)
    {
        $receiving_email_address = 'huda.f.shakir@gmail.com';

    }
}
