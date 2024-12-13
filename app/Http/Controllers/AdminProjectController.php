<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'sometimes|required',
            'description' => 'sometimes|required',
        ]);

        $imageName = $request->file('image')->store('projects', 'public');

        project::create([
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('project.index')->with('success', 'Data added successfully');

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
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'image' => 'nullable|image',
            'description' => 'sometimes|required',
        ]);
        
        $data = $request->only('description');

        if ($request->hasFile('image')) {
            if (!empty($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $imageName = $request->file('image')->store('projects', 'public');
            $data['image'] = $imageName;
        }

        $project->update($data);

        return redirect()->route('project.index')->with('success', 'Data updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::disk('public')->delete($project->image);
        $project->delete();
        
        return redirect()->route('project.index')->with('success', 'Project deleted successfully.');
    }
}
