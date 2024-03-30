<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectFiles;
use App\Models\Technology;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technos = Technology::all();
        return view('admin.pages.projects.create', compact('technos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        $project = Project::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'web_link' => $data['web_link'] ?? null,
            'app_link' => $data['app_link'] ?? null,
            'source_code' => $data['source_code'] ?? null,
            'demo_link' => $data['demo_link'] ?? null,
        ]);
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $path = $file->storeAs('Projects/' . $project->id, $filename, 'local');
                ProjectFiles::create([
                    'path' => $path,
                    'is_video' => $extension == "mp4",
                    'is_preview' => false,
                    'project_id' => $project->id
                ]);
            }
        }

        $preview = $request->file('preview')->getClientOriginalName();
        $path = $request->file('preview')->storeAs('Projects/' . $project->id, $preview, 'local');
        ProjectFiles::create([
            'path' => $path,
            'is_video' => false,
            'is_preview' => true,
            'project_id' => $project->id
        ]);

        $project->technologies()->attach($data['technologies']);
        return redirect()->to(route('admin.project.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $technos = Technology::all();
        return view('admin.pages.projects.edit', compact('project', 'technos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach (ProjectFiles::where('project_id', $project->id)->where('is_preview', false)->get() as $item) {
                \Illuminate\Support\Facades\File::delete($item->path);
                $item->delete();
            }
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $path = $file->storeAs('Projects/' . $project->id, $filename, 'local');
                ProjectFiles::create([
                    'path' => $path,
                    'is_video' => $extension == "mp4",
                    'is_preview' => false,
                    'project_id' => $project->id
                ]);
            }
        }
        if ($request->hasFile('preview')) {
            $preview = $project->files->where('is_preview', true)->first;
            \Illuminate\Support\Facades\File::delete($preview->path);
            $filename = $request->file('preview')->getClientOriginalName();
            $path = $file->storeAs('Projects/' . $project->id, $filename, 'local');
            ProjectFiles::create([
                'path' => $path,
                'is_video' => false,
                'is_preview' => true,
                'project_id' => $project->id
            ]);
            $preview->delete();
        }
        $project->update($data);
        $technos = $project->technologies->pluck('id')->toArray();
        $project->technologies()->detach($technos);
        $project->technologies()->attach($data['technologies']);
        return redirect()->to(route('admin.project.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->to(route('admin.project.index'));
    }
}
