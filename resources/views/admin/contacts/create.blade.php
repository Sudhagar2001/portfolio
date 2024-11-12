@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Add New Contact</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Contact Information</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" id="instagram" class="form-control">
                        </div>
                    </div>

                  
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="google">Google</label>
                            <input type="text" name="google" id="google" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="form-control">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Contact</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
