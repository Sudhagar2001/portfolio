<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Contact; // Assuming Contact is a model for your contact info


class HomeController extends Controller
{
    public function index()
    {  $projects = Project::all();
        $recentProjects = Project::latest()->take(5)->get();
        $contact = Contact::first();
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $educations = Education::orderBy('start_date', 'desc')->get();
        return view('home', compact('projects','educations','experiences','contact','recentProjects'));
    }
}

