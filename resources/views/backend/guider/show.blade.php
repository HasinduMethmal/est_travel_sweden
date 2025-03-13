@extends('backend.home')

@section('title', 'Tour Guide Details')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y col-lg-6">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Tour Guide Details</h4>
        <a href="{{ route('back_guider.index') }}" class="btn btn-secondary">Back </a>
    </div>

    <div class="card mb-6">
        <div class="card-body pt-12">
            <!-- Tour Guide Avatar Section -->
            <div class="destination-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <!-- Displaying Tour Guide Image -->
                    <img class="img-fluid rounded mb-4" 
                         src="{{ asset('storage/' . $guider->image) }}" 
                         height="120" width="120" alt="Tour Guide Image" />
                    <div class="destination-info text-center">
                        <h5>{{ $guider->name }}</h5>
                        <span class="badge bg-label-primary">{{ ucfirst($guider->status) }}</span>
                    </div>
                </div>
            </div>


            <!-- Details Section -->
            <h5 class="pb-4 border-bottom mb-4">Tour Guide Information</h5>
            <div class="info-container">
                <ul class="list-unstyled mb-6">
                    <li class="mb-2">
                        <span class="h6">Name:</span>
                        <span>{{ $guider->name }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Email:</span>
                        <span>{{ $guider->email }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Phone:</span>
                        <span>{{ $guider->phone ?? 'N/A' }}</span>
                    </li>
                    <li class="mb-2">
                        <span class="h6">Status:</span>
                        <span class="badge bg-{{ $guider->is_active == '1' ? 'success' : 'warning' }}">
                            {{ ucfirst($guider->is_active=='1'?'Available':'Unavailable') }}
                        </span>                    
                    </li>
                    <li class="mb-2">
                        <span class="h6">Bio:</span>
                        <span>{{ $guider->bio ?? 'N/A' }}</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

@endsection
