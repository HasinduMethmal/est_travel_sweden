@extends('backend.home')

@section('title', 'Create Tour Guide')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-4">Create New Tour Guide</h4>

    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Tour Guide Creation Form -->
            <form action="{{ route('back_guider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <!-- Tour Guide Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Tour Guide Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    >
                </div>
            
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                    >
                </div>
            
                <!-- Status Field -->
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status</label>
                    <select name="is_active" id="is_active" class="form-control" required>
                        <option value="1" >Active</option>
                        <option value="0" >Inactive</option>
                    </select>
                </div>
            
                <!-- Bio Field -->
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea
                        id="bio"
                        name="bio"
                        class="form-control"
                        required>{{ old('bio') }}</textarea>
                </div>
            
                <!-- Phone Number Field (Optional) -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="form-control"
                        value="{{ old('phone') }}"
                    >
                </div>
            
                <!-- Profile Image Field (Optional) -->
                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="form-control"
                        accept="image/*"
                    >
                </div>
            
                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Create Tour Guide</button>
                    <a href="{{ route('back_guider.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
