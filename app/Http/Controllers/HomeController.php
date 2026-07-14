<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    // Halaman Home (Menampilkan Project & Skill)
    public function index()
    {
        // Ambil project yang di-featured, urutkan berdasarkan sort_order
        $projects = Project::where('is_featured', true)
                           ->orderBy('sort_order', 'asc')
                           ->get();
        
        // Ambil semua skills
        $skills = Skill::all();
        
        // Kirim data ke view pages.home
        return view('pages.home', compact('projects', 'skills'));
    }

    // Halaman About
    public function about()
    {
        $skills = Skill::all();
        return view('pages.about', compact('skills'));
    }

    // Halaman Projects
    public function projects()
    {
        $projects = Project::orderBy('sort_order', 'asc')->get();
        return view('pages.projects', compact('projects'));
    }

    // Halaman Contact
    public function contact()
    {
        return view('pages.contact');
    }
}