<?php


namespace App\Http\Controllers;

use App\Models\Commit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commits = Commit::latest()->paginate(10);
        return view('admin.commit.index')->with('commits', $commits);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.commit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        Commit::create($data);
//        dd($data);

        return redirect()->route('commit.index')->with('success', 'Commit created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commit $commit)
    {
        return view('admin.commit.show')->with('commit', $commit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commit $commit)
    {
        return view('admin.commit.edit', compact('commit'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commit $commit)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($commit->image) {
                Storage::delete($commit->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $commit->update($data);

        return redirect()->route('commit.index')->with('success', 'Commit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commit $commit)
    {
        if ($commit->image) {
            Storage::delete($commit->image);
        }

        $commit->delete();

        return redirect()->back();
    }
}
