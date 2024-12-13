<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index', compact ('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'sometimes|required',
            'subtitle' => 'sometimes|required',
            'description' => 'sometimes|required',
            'picture' => 'nullable|image',
        ]);

        $pictureName = $request->file('picture')->store('homes', 'public');

        Home::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'picture' => $pictureName,
        ]);

        return redirect()->route('home.index')->with('success', 'Data added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title' => 'sometimes|required',
            'subtitle' => 'sometimes|required',
            'description' => 'sometimes|required',
            'picture' => 'nullable|image',
        ]);

        $data = $request->only('title', 'subtitle', 'description');

        if ($request->hasFile('picture')) {
            if (!empty($home->picture)) {
                Storage::disk('public')->delete($home->picture);                
            }

            $pictureName = $request->file('picture')->store('homes', 'public');
            $data['picture'] = $pictureName;
        }

        $home->update($data);

        return redirect()->route('home.index')->with('success', 'Data updated successfully  ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        Storage::disk('public')->delete($home->picture);
        $home->delete();
        
        return redirect()->route('home.index')->with('success', 'Project deleted successfully.');
    }
}
