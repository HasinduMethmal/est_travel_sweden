@extends('backend.admin-dashboard.home')

@section('title', 'Create Service')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-4">Create New Service</h4>

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

            <!-- Service Creation Form -->
            <form action="{{ route('back_service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Service Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    >
                </div>

                <!-- Description Field -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea
                        id="description"
                        name="description"
                        class="form-control"
                        required>{{ old('description') }}</textarea>
                </div>

                <!-- Price Field -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        class="form-control"
                        value="{{ old('price') }}"
                        required
                    >
                </div>

            

                <!-- Image Field -->
                <div class="mb-3">
                    <label for="image" class="form-label">Service Image</label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="form-control"
                        accept="image/*"
                    >
                </div>

                <!-- Status Field -->
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status</label>
                    <select id="is_active" name="is_active" class="form-control" required>
                        <option value="1" >Active</option>
                        <option value="0" >Inactive</option>
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Create Service</button>
                    <a href="{{ route('back_service.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
