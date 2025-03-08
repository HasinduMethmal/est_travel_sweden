@extends('backend.admin-dashboard.home')

@section('title', 'Destination Details')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y col-lg-6">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Destination Details</h4>
        <a href="{{ route('back_destination.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card mb-6">
        <div class="card-body pt-12">
            <!-- Destination Avatar Section -->
            <div class="destination-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <!-- Displaying Destination Image -->
                    <img class="img-fluid rounded mb-4" 
                         src="{{ asset('storage/' . $destination->image) }}" 
                         height="120" width="120" alt="Destination Image" />
                    <div class="destination-info text-center">
                        <h5>{{ $destination->name }}</h5>
                        <span class="badge bg-label-primary">{{ ucfirst($destination->status) }}</span>
                    </div>
                </div>
            </div>

            <!-- Details Section -->
            <h5 class="pb-4 border-bottom mb-4">Destination Information</h5>
            <div class="info-container">
                <ul class="list-unstyled mb-6">
                    <li class="mb-2">
                        <span class="h6">Name:</span>
                        <span>{{ $destination->name }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Price:</span>
                        <span>${{ number_format($destination->price, 2) }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Availability:</span>
                        <span class="badge bg-{{ $destination->is_active == '1' ? 'success' : 'warning' }}">
                            {{ ucfirst($destination->is_active=='1'?'Available':'Unavailable') }}
                        </span>                    
                    </li>
                    <li class="mb-2">
                        <span class="h6">Description:</span>
                        <span>{{ $destination->description }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Location:</span>
                        <span>{{ $destination->location }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
