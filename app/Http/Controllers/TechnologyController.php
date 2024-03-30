<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnos = Technology::all();
        return view('admin.pages.techno.index',compact('tecnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.techno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('logo')){
            $imageName = $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->storeAs('Technologies', $imageName, 'local');
        }

         Technology::create([
            'name' => $request->name,
            'logo' => $path??null,
             'is_framework'=>$request->is_framework ?? false
        ]);


        return redirect()->to(route('admin.techno.index'));

    }


    public function edit(string $id)
    {
        $techno = Technology::findOrFail($id);
        return view('admin.pages.techno.edit',compact('techno'));
    }

    public function update(Request $request, string $id)
    {
        $techno = Technology::findOrFail($id);
        if($request->hasFile('logo')){
            File::delete($techno->image);
            $imageName = $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->storeAs('Technologies', $imageName, 'local');
        }

        $techno->update([
            'name' => $request->name,
            'logo' => $path??$techno->logo,
            'is_framework'=>$request->is_framework ?? false
        ]);
        return redirect()->to(route('admin.techno.index'));
    }


    public function destroy(string $id)
    {
        Technology::findOrFail($id)->delete();
        return redirect()->to(route('admin.techno.index'));
    }
}
