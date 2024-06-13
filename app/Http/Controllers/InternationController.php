<?php


namespace App\Http\Controllers;

use App\Models\Internation;
use Illuminate\Http\Request;

class InternationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internations = Internation::latest()->paginate(10);
        return view('admin.internation.index')->with('internations', $internations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.internation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'telegram' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $data = $validated;

        Internation::create($data);

        return redirect()->route('internation.index')->with('success', 'Internation created successfully.');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Internation $internation)
    {
        return view('admin.internation.edit')->with('internation', $internation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Internation $internation)
    {
        $validated = $request->validate([
            'telegram' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $data = $validated;

        $internation->update($data);

        return redirect()->route('internation.index')->with('success', 'Internation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Internation $internation)
    {

        $internation->delete();

        return redirect()->back();
    }
}
