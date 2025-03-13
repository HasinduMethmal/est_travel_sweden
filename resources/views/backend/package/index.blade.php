@extends('backend.home')

@section('title', 'Package index')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Travel Packages</h4>
        <a href="{{ route('back_package.create') }}" class="btn btn-primary">Add New Package</a>
    </div>

    <div class="card">
        <h5 class="card-header">Package List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Based Destination</th>
                        <th>Price</th>
                        <th>Duration (Days)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($packages as $package)
                    <tr>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->destination }}</td>
                        <td>{{ $package->price }}</td>
                        <td>{{ $package->duration }}</td>
                        <td>
                            <span class="badge bg-{{ $package->is_active ? 'success' : 'danger' }}">
                                {{ $package->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Edit -->
                                    <a class="dropdown-item" href="{{ route('back_package.edit', $package->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                    <!-- Delete -->
                                    <a class="dropdown-item text-danger" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $package->id }}">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Confirmation Modal for each package -->
                    <div class="modal fade" id="confirmDeleteModal{{ $package->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $package->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel{{ $package->id }}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this travel package? This action cannot be undone.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form id="deleteForm{{ $package->id }}" action="{{ route('back_package.destroy', $package->id) }}" method="POST" style="display: inline;">
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
                        <td colspan="6" class="text-center">No packages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
