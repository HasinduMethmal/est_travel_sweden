@extends('backend.admin-dashboard.home')

@section('title', 'Edit Destination')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Destination</h4>

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
            <!-- Form for editing a destination -->
            <form action="{{ route('back_destination.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Destination Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Destination Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $destination->name) }}" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ old('description', $destination->description) }}</textarea>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $destination->price) }}" required>
                </div>

              

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="Active" {{ old('status', $destination->status) == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status', $destination->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">Destination Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    @if($destination->image)
                        <small class="form-text text-muted">Current Image: <a href="{{ asset('storage/'.$destination->image) }}" target="_blank">View Image</a></small>
                    @endif
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Destination</button>
                    <a href="{{ route('back_destination.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
