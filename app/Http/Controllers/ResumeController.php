<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    // Display all resumes
    public function index()
    {
        $resumes = Resume::all();  // Fetch all resumes
        return view('admin.resumes.index', compact('resumes'));  // Pass data to the view
    }

    // Show form for uploading a new resume
    public function create()
    {
        return view('admin.resumes.create');
    }

    // Store a new resume
    public function store(Request $request)
    {
        $request->validate([
            'resume_type' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $filePath = $request->file('file')->store('resumes', 'public');

        Resume::create([
            'resume_type' => $request->resume_type,
            'file_path' => $filePath,
        ]);

        return redirect()->route('resumes.index')->with('success', 'Resume uploaded successfully!');
    }

    // Show form for editing a resume
    public function edit(Resume $resume)
    {
        return view('admin.resumes.edit', compact('resume'));
    }

    // Update a resume
    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Delete the old file if it exists
        if (Storage::disk('public')->exists($resume->file_path)) {
            Storage::disk('public')->delete($resume->file_path);
        }

        // Store the new file
        $filePath = $request->file('file')->store('resumes', 'public');

        // Update the resume details
        $resume->update([
            'file_path' => $filePath,
        ]);

        return redirect()->route('resumes.index')->with('success', 'Resume updated successfully!');
    }

    // Delete a resume
    public function destroy(Resume $resume)
    {
        // Delete the file from storage
        if (Storage::disk('public')->exists($resume->file_path)) {
            Storage::disk('public')->delete($resume->file_path);
        }

        // Delete the resume from the database
        $resume->delete();

        return redirect()->route('resumes.index')->with('success', 'Resume deleted successfully!');
    }
}
    