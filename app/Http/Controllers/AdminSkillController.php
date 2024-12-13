<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi untuk gambar
        ]);
    
        $pictureName = $request->file('picture')->store('skills', 'public');
    
        Skill::create([
            'picture' => $pictureName,
        ]);

        return redirect()->route('skill.index')->with('success', 'Skill berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'string',
        ]);

        $data = $request->only('title');
        
        if ($request->hasFile('picture')) {
            if (!empty($skill->picture)) {
                Storage::disk('public')->delete($skill->picture);
            }

            $pictureName = $request->file('picture')->store('skills', 'public');
            $data['picture'] = $pictureName;
        }

        $skill->update($data);
        
        // Redirect ke halaman indeks skill
        return redirect()->route('skill.index')->with('success', 'Data updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skill.index');
    }
}
