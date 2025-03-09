@extends('backend.admin-dashboard.home')

@section('title', 'Dashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Add New Button -->
    <div class="mb-3">
        <a href="{{ route('back_gallery.create') }}" class="btn btn-primary">Add New Image</a>
    </div>

    <!-- Table to show gallery images -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Gallery Images</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/'.$image->image) }}" alt="Image" width="100"></td>
                            <td>
                                <!-- View Button -->
                                <a href="{{ asset('storage/'.$image->image) }}" target="_blank" class="btn btn-info btn-sm">View</a>
                                
                                <!-- Delete Button (Triggers Modal) -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $image->id }}">
                                    Delete
                                </button>

                                <!-- Confirmation Modal for Deletion -->
                                <div class="modal fade" id="confirmDeleteModal{{ $image->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $image->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel{{ $image->id }}">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this image? This action cannot be undone.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <!-- Delete Form -->
                                                <form id="deleteForm{{ $image->id }}" action="{{ route('back_gallery.destroy', $image->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
