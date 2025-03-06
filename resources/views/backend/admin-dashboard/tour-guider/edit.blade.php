@extends('backend.admin-dashboard.home')

@section('title', 'Edit Tour Guide')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Tour Guide</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <!-- Form for editing a tour guide -->
            <form action="{{ route('guider.update', $guider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Tour Guide Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Tour Guide Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $guider->name) }}" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $guider->email) }}" required>
                </div>

                <!-- Bio -->
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" required>{{ old('bio', $guider->bio) }}</textarea>
                </div>

                <!-- Phone Number (Optional) -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $guider->phone) }}">
                </div>

                <!-- Profile Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    @if($guider->image)
                        <small class="form-text text-muted">Current Image: <a href="{{ asset('storage/'.$guider->image) }}" target="_blank">View Image</a></small>
                    @endif
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="Active" {{ old('status', $guider->status) == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status', $guider->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="Suspended" {{ old('status', $guider->status) == 'Suspended' ? 'selected' : '' }}>Suspended</option>
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Tour Guide</button>
                    <a href="{{ route('guider.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
