<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill; // Impor model 

class dashboardController extends Controller
{
    public function index()
    {
        $home = Home::all();
        $about = About::all(); // Ambil semua data dari model About
        $skill = Skill::all();
        $project = Project::all();
        $certificate = Certificate::all();
        return view('index', compact('home', 'about', 'skill', 'project', 'certificate')); // Kirimkan kedua data
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke tabel 'contacts'
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('index')->with('success', 'Message sent successfully');
    }
}