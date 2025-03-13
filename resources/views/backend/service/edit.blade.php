@extends('backend.home')

@section('title', 'Edit Tour Service') <!-- Updated title for the tour service -->

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Tour Service</h4>

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
            <!-- Form for editing a tour service -->
            <form action="{{ route('back_service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Service Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $service->name) }}" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ old('description', $service->description) }}</textarea>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $service->price) }}" required>
                </div>

              

                <!-- Service Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Service Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    @if($service->image)
                        <small class="form-text text-muted">Current Image: <a href="{{ asset('storage/'.$service->image) }}" target="_blank">View Image</a></small>
                    @endif
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status</label>
                    <select name="is_active" id="is_active" class="form-control" required>
                        <option value="1" {{ old('is_active', $service->is_active) == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $service->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Service</button>
                    <a href="{{ route('back_service.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
