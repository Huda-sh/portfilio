<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RecommendationController extends Controller
{

    public function index()
    {
        $recomms = Recommendation::all();
        return view('admin.pages.recommend.index', compact('recomms'));
    }


    public function create()
    {
        return view('admin.pages.recommend.create');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Recommend', $imageName, 'custom');
        }
        Recommendation::create([
            'name' => $request->name,
            'text' => $request->text,
            'organization' => $request->organization,
            'is_male' => $request->is_male ?? false,
            'image' => $path ?? null,
        ]);

        return redirect()->to(route('admin.recommend.index'));
    }


    public function edit(string $id)
    {
        $recomm = Recommendation::findOrFail($id);
        return view('admin.pages.recommend.edit', compact('recomm'));
    }


    public function update(Request $request, string $id)
    {
        $recomm = Recommendation::findOrFail($id);

        if($request->hasFile('image')){
            File::delete($recomm->image);
            $imageName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Recommend', $imageName, 'custom');
        }

        $recomm->update([
            'name' => $request->name,
            'text' => $request->text,
            'organization' => $request->organization,
            'is_male' => $request->is_male ?? false,
            'image' => $path ?? $recomm->image,
        ]);
        return redirect()->to(route('admin.recommend.index'));
    }


    public function destroy(string $id)
    {
        $rec = Recommendation::findOrFail($id);
        File::delete($rec->image);
        $rec->delete();
        return redirect()->to(route('admin.recommend.index'));
    }
}
