<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.pages.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('icon')){
            $imageName = $request->file('icon')->getClientOriginalName();
            $path = $request->file('icon')->storeAs('Contacts', $imageName, 'custom');
        }
        Contact::create([
            'icon' => $path??null,
            'platform' => $request->platform,
            'is_link' => $request->is_link??false,
            'text' => $request->text
        ]);
        return redirect()->to(route('admin.contact.index'));
    }


    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.pages.contacts.edit',compact('contact'));
    }


    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        if($request->hasFile('icon')){
            File::delete($contact->icon);
            $imageName = $request->file('icon')->getClientOriginalName();
            $path = $request->file('icon')->storeAs('Contacts', $imageName, 'custom');
        }

        $contact->update([
            'icon' => $path??$contact->icon,
            'platform' => $request->platform,
            'is_link' => $request->is_link??false,
            'text' => $request->text
        ]);
        return redirect()->to(route('admin.contact.index'));
    }


    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->to(route('admin.contact.index'));
    }
}
