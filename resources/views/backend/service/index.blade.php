@extends('backend.home')

@section('title', 'Tour Service Index')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Tour Services</h4>
        <a href="{{ route('back_service.create') }}" class="btn btn-primary">Add New Service</a>
    </div>

    <div class="card">
        <h5 class="card-header">Tour Service List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->category }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <span class="badge bg-{{ $service->is_active ? 'success' : 'danger' }}">
                                {{ $service->is_active ? 'Available' : 'Unavailable' }}
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Edit -->
                                    <a class="dropdown-item" href="{{ route('back_service.edit', $service->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                    <!-- Delete -->
                                    <a class="dropdown-item text-danger" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $service->id }}">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Confirmation Modal for each service -->
                    <div class="modal fade" id="confirmDeleteModal{{ $service->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $service->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel{{ $service->id }}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this tour service? This action cannot be undone.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <!-- Delete Form for this service -->
                                    <form action="{{ route('back_service.destroy', $service->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No tour services found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
