<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $projects = Project::paginate(10); // 10 projects per page
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',  // end_date is optional during creation
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
        }

        // Store the project
        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',  // end_date is optional during update
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($project->image && Storage::exists('public/' . $project->image)) {
                Storage::delete('public/' . $project->image);
            }
            $validated['image'] = $this->uploadImage($request->file('image'));
        }

        // Update the project
        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Delete the associated image if exists
        if ($project->image && Storage::exists('public/' . $project->image)) {
            Storage::delete('public/' . $project->image);
        }

        // Delete the project
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Helper function to handle image uploads.
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @return string
     */
    private function uploadImage($image)
    {
        return $image->store('project_images', 'public');
    }
}
