@extends('layouts.admin')

@section('content')
<style>
   
    .card {
        border-radius: 15px;
        border: none;
        background-color: #f8f9fa;
    }

    .form-select, .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .btn {
        border-radius: 50px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-cancel {
        background-color: #dc3545;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-cancel:hover {
        background-color: #c82333;
    }
</style>

<div class="container my-5">
    <div class="card shadow-lg p-5">
        <h2 class="text-center text-primary mb-4">Upload New Resume</h2>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="resume_type" class="form-label fw-bold">Resume Type</label>
                <select class="form-select form-control-lg" name="resume_type" id="resume_type" required>
                    <option value="short">Short Resume</option>
                    <option value="full">Full Resume</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="file" class="form-label fw-bold">Upload Resume (PDF only)</label>
                <input type="file" class="form-control form-control-lg" name="file" id="file" accept=".pdf" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Upload Resume</button>
                <button type="button" class="btn btn-cancel btn-lg" id="cancelButton">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('cancelButton').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to recover this action!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, go back!',
            cancelButtonText: 'No, stay here!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('resumes.index') }}";
            }
        });
    });
</script>
@endsection
