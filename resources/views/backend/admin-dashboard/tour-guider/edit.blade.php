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
            <form action="{{ route('back_guider.update', $guider->id) }}" method="POST" enctype="multipart/form-data">
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
                    <textarea name="bio" id="bio" class="form-control" maxlength="1000">{{ old('bio', $guider->bio) }}</textarea>
                </div>

                <!-- Phone Number (Optional) -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $guider->phone) }}" pattern="^[0-9]{10,15}$" maxlength="15">
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
                    <label for="is_active" class="form-label">Status</label>
                    <select name="is_active" id="is_active" class="form-control" required>
                        <option value="1" {{ old('is_active', $guider->is_active) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $guider->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Tour Guide</button>
                    <a href="{{ route('back_guider.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
