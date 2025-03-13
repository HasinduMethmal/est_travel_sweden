@extends('backend.home')

@section('title', 'Destinations Index')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Destinations</h4>
        <a href="{{ route('back_destination.create') }}" class="btn btn-primary">Add New Destination</a>
    </div>

    <div class="card">
        <h5 class="card-header">Destination List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($destinations as $destination)
                    <tr>
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->price }}</td>
                        <td>
                            <span class="badge bg-{{ $destination->is_active == 1 ? 'success' : 'warning' }}">
                                {{ ucfirst($destination->is_active == 1 ? 'Available' : 'Unavailable') }}
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('back_destination.show', $destination->id) }}">
                                        <i class="ti ti-eye me-1"></i> View
                                    </a>
                                    <a class="dropdown-item" href="{{ route('back_destination.edit', $destination->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $destination->id }}">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </button>
                                </div>
                            </div>

                            <!-- Delete Confirmation Modal for each destination -->
                            <div class="modal fade" id="confirmDeleteModal{{ $destination->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $destination->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel{{ $destination->id }}">Confirm Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this destination? This action cannot be undone.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <!-- Delete Form -->
                                            <form action="{{ route('back_destination.destroy', $destination->id) }}" method="POST" style="display: inline;">
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
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No destinations found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
