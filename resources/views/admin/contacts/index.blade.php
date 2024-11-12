@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Contact Information</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a>

    <h3 class="mt-4">Contact List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Instagram</th>
                <th>Linkedin</th>
                
                <th>Google</th>
                <th>WhatsApp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->instagram }}</td>
                    
                    <td>{{ $contact->linkedin }}</td>
                    <td>{{ $contact->google }}</td>
                    <td>{{ $contact->whatsapp }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
