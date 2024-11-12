<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'company' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        Experience::create($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience added successfully.');
    }

    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'required',
            'company' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        $experience = Experience::find($id);
        $experience->update($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully.');
    }

    public function destroy($id)
    {
        Experience::destroy($id);
        return redirect()->route('experiences.index')->with('success', 'Experience deleted successfully.');
    }
}