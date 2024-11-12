<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Education;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch all experiences and education records from the database
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $educations = Education::orderBy('start_date', 'desc')->get();

        // Pass the data to the 'about' view
        return view('about', compact('experiences', 'educations'));
    }
}
