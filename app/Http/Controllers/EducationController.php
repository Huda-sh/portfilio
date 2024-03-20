<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('admin.pages.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $data = $request->validated();
        Education::create($data);
        return redirect()->to(route('admin.education.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('admin.pages.education.edit', compact('education'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, $id)
    {
        $data = $request->validated();
        $experince = Education::findOrFail($id);
        $experince->update($data);
        return redirect()->to(route('admin.education.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experince = Education::findOrFail($id);
        $experince->delete();
        return redirect()->to(route('admin.education.index'));

    }
}
