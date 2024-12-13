<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'issued_by' => 'required',
            'issued_at' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);
        $fileName = $request->file('file')->store('certificates', 'public');

        Certificate::create([
            'name' => $request->name,
            'issued_by' => $request->issued_by,
            'issued_at' => $request->issued_at,
            'description' => $request->description,
            'file' => $fileName,
        ]);

        return redirect()->route('certificate.index')->with('success', 'Data added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $certificate = Certificate::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'file' => 'nullable|mimes:pdf,jpg,png|max:2048',
           'description' => 'required'
        ]);
        
        // Upload gambar baru jika ada, dan hapus gambar lama

        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            if ($certificate->file) {
                Storage::disk('public')->delete($certificate->file);
            }

            $file = $request->file('file');
            $path = $file->store('certificate', 'public');
        } else {
            $path = $certificate->file;
        }

        $certificate->update([
            'name' => $validated['name'],
            'issued_by' => $validated['issued_by'],
            'issued_at' => $validated['issued_at'],
            'file' => $path,
            'descrition' => $request['description'],
        ]);

        return redirect()->route('certificate.index')->with('updated', 'true');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        Storage::disk('public')->delete($certificate->file);
        $certificate->delete();

        return redirect()->route('certificate.index')->with('deleted','true');

    }
}
