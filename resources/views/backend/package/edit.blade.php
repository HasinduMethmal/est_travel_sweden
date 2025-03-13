@extends('backend.home')

@section('title', 'Edit Package') <!-- Updated title for the package -->

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Package</h4>

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
            <!-- Form for editing a package -->
            <form action="{{ route('back_package.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Package Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Package Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $package->name) }}" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ old('description', $package->description) }}</textarea>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $package->price) }}" required>
                </div>

                <!-- Destination -->
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <input type="text" name="destination" id="destination" class="form-control" value="{{ old('destination', $package->destination) }}" required>
                </div>

                <!-- Duration -->
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration (Days)</label>
                    <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration', $package->duration) }}" required>
                </div>

                <!-- Package Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Package Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    @if($package->image)
                        <small class="form-text text-muted">Current Image: <a href="{{ asset('storage/'.$package->image) }}" target="_blank">View Image</a></small>
                    @endif
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status</label>
                    <select name="is_active" id="is_active" class="form-control" required>
                        <option value="1" {{ old('is_active', $package->is_active) == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $package->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Package</button>
                    <a href="{{ route('back_package.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
