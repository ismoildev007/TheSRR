<?php


namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contact.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
        ]);

        $data = $validated;

        Contact::create($data);

        return redirect()->route('contact.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
        ]);

        $data = $validated;

        $contact->update($data);

        return redirect()->route('contact.index')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {

        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'News deleted successfully.');
    }
}
