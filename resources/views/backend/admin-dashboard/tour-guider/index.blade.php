@extends('backend.admin-dashboard.home')

@section('title', 'Tour Guides Index')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Tour Guides</h4>
        <a href="{{ route('back_guider.create') }}" class="btn btn-primary">Add New Tour Guide</a>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('back_guider.index') }}" class="mb-4">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" class="form-control" name="email" placeholder="Search by Email" value="{{ request('email') }}">
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>

    <div class="card">
        <h5 class="card-header"> List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($guiders as $index => $guider)
                    <tr>
                        <td>{{ $guiders->firstItem() + $index }}</td>
                        <td>{{ $guider->name }}</td>
                        <td>{{ $guider->email }}</td>
                        <td>
                            <span class="badge bg-{{ $guider->is_active == '1' ? 'success' : 'warning' }}">
                                {{ ucfirst($guider->is_active=='1'?'Available':'Unavailable') }}
                            </span>
                        </td>
                        <td>{{ $guider->phone ?? 'N/A' }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i> <!-- Dropdown Icon -->
                                </button>
                                <div class="dropdown-menu">
                                    <!-- View -->
                                    <a class="dropdown-item" href="{{ route('back_guider.show', $guider->id) }}">
                                        <i class="ti ti-eye me-1"></i> View
                                    </a>
                                    <!-- Edit -->
                                    <a class="dropdown-item" href="{{ route('back_guider.edit', $guider->id) }}">
                                        <i class="ti ti-pencil me-1"></i> Edit
                                    </a>
                                    <!-- Delete -->
                                    <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $guider->id }}">
                                        <i class="ti ti-trash me-1"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal for each guider -->
                    <div class="modal fade" id="confirmDeleteModal{{ $guider->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $guider->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel{{ $guider->id }}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this tour guide? This action cannot be undone.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <!-- The delete form -->
                                    <form action="{{ route('back_guider.destroy', $guider->id) }}" method="POST">
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
                        <td colspan="6" class="text-center">No tour guides found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Custom Pagination -->
            <div class="col-lg-6 mb-6 ms-4">
                <small class="text-light fw-medium">Pages</small>
                <div class="demo-inline-spacing">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            {{-- First page link --}}
                            <li class="page-item {{ $guiders->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link waves-effect" href="{{ $guiders->url(1) }}">
                                    <i class="ti ti-chevrons-left ti-sm"></i>
                                </a>
                            </li>

                            {{-- Previous page link --}}
                            <li class="page-item {{ $guiders->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link waves-effect" href="{{ $guiders->previousPageUrl() }}">
                                    <i class="ti ti-chevron-left ti-sm"></i>
                                </a>
                            </li>

                            {{-- Loop through the pages --}}
                            @foreach ($guiders->getUrlRange(1, $guiders->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $guiders->currentPage() ? 'active' : '' }}">
                                    <a class="page-link waves-effect" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Next page link --}}
                            <li class="page-item {{ $guiders->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link waves-effect" href="{{ $guiders->nextPageUrl() }}">
                                    <i class="ti ti-chevron-right ti-sm"></i>
                                </a>
                            </li>

                            {{-- Last page link --}}
                            <li class="page-item {{ $guiders->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link waves-effect" href="{{ $guiders->url($guiders->lastPage()) }}">
                                    <i class="ti ti-chevrons-right ti-sm"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--/ Custom Pagination -->
        </div>
    </div>
</div>

@endsection
