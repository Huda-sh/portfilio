<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.pages.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        $data = $request->validated();
        Experience::create($data);
        return redirect()->to(route('admin.experience.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experince = Experience::findOrFail($id);
        return view('admin.pages.experience.edit', compact('experince'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, $id)
    {
        $data = $request->validated();
        $experince = Experience::findOrFail($id);
        $experince->update($data);
        return redirect()->to(route('admin.experience.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experince = Experience::findOrFail($id);
        $experince->delete();
        return redirect()->to(route('admin.experience.index'));

    }
}
