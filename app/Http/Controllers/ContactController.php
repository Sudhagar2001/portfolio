<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display a listing of the contacts
    public function index()
    {
        $contacts = Contact::all(); // Fetch all contacts
        return view('admin.contacts.index', compact('contacts')); // Pass contacts to the view
    }

    // Show the form for creating a new contact
    public function create()
    {
        return view('admin.contacts.create'); // Return the create view
    }

    // Store a newly created contact in storage
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
           
            'google' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
        ]);

        Contact::create($request->all()); // Create new contact

        return redirect()->route('contacts.index')->with('success', 'Contact added successfully!'); // Redirect with success message
    }

    // Show the form for editing the specified contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id); // Find the contact by ID
        return view('admin.contacts.edit', compact('contact')); // Pass contact to the edit view
    }

    // Update the specified contact in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            
            'google' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
        ]);

        $contact = Contact::findOrFail($id); // Find the contact by ID
        $contact->update($request->all()); // Update contact details

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!'); // Redirect with success message
    }

    // Delete the specified contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id); // Find the contact by ID
        $contact->delete(); // Delete the contact

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!'); // Redirect with success message
    }

    public function display()
    {
        // Fetch the first contact
        $contact = Contact::first();
    
        return view('contact', compact('contact'));
    }
    
}
