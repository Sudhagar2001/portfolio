@extends('layouts.admin')

@section('content')
<!-- Custom Styles for Manage Resumes -->
<style>
    

    .card {
        border-radius: 15px;
        border: none;
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #007bff;
        color: #fff;
        border-radius: 15px 15px 0 0;
        padding: 20px;
        font-size: 1.25rem;
    }

    .btn {
        border-radius: 30px;
        transition: all 0.3s ease-in-out;
    }

    .btn-outline-info i,
    .btn-outline-warning i,
    .btn-outline-danger i {
        margin-right: 8px;
    }

    .btn-outline-info:hover {
        background-color: #17a2b8;
        color: #fff;
    }

    .btn-outline-warning:hover {
        background-color: #ffc107;
        color: #fff;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }

    .table {
        margin-top: 20px;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">
                <i class="fas fa-file-alt"></i> Manage Resumes
            </h3>
            <a href="{{ route('resumes.create') }}" class="btn btn-light ">
                <i class="fas fa-upload"></i> Add New Resume
            </a>
        </div>

        <div class="card-body p-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th><i class="fas fa-file"></i> Resume Type</th>
                        <th><i class="fas fa-download"></i> Download</th>
                        <th><i class="fas fa-cogs"></i> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($resumes as $resume)
                        <tr>
                            <td>{{ ucfirst($resume->resume_type) }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $resume->file_path) }}" 
                                   download class="btn btn-outline-info">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('resumes.edit', $resume) }}" 
                                   class="btn btn-outline-warning mx-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-outline-danger mx-1" 
                                        onclick="confirmDelete('{{ route('resumes.destroy', $resume) }}')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">
                                <i class="fas fa-info-circle"></i> No resumes available.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SweetAlert2 Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(deleteUrl) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.createElement('form');
                form.action = deleteUrl;
                form.method = 'POST';
                form.innerHTML = `
                    @csrf
                    @method('DELETE')
                `;
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>
@endsection
