@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 ">Projects List</h4>
                        <a href="{{ route('projects.create') }}" class="btn  bg-warning text-dark">
                            <i class="bi bi-plus-circle me-1"></i> Add New Project
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover table-bordered align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Project Title</th>
                                    <th>Technologies Used</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Project Image</th> <!-- New Column for Image -->
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->technologies }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->end_date ?? 'N/A' }}</td>
                                        <td>
                                            @if($project->image)
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('projects.edit', $project) }}" 
                                                   class="btn btn-sm btn-warning me-1">
                                                    <i class="bi bi-pencil"></i> 
                                                </a>
                                                <form action="{{ route('projects.destroy', $project) }}" 
                                                      method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i> 
                                                    </button>
                                                </form>
                                            </div>  
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $projects->links() }} <!-- Pagination Links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
