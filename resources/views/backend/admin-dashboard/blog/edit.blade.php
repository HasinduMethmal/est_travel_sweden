@extends('backend.admin-dashboard.home')

@section('title', 'Edit Blog')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Success message after updating the blog -->
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mb-4">
        <h5 class="card-header">Edit Blog Post</h5>
        <div class="card-body">
            <!-- Blog Edit Form -->
            <form action="{{ route('back_blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Method Spoofing for PUT request -->
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description', $blog->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <textarea name="topic" id="topic" class="form-control @error('description') is-invalid @enderror" rows="1" required>{{ old('topic', $blog->topic) }}</textarea>
                    @error('topic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Display current image -->
                @if($blog->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label>
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                @else
                    <div class="mb-3">
                        <label class="form-label">No Image Uploaded</label>
                    </div>
                @endif

                <div class="d-flex justify-content-between">
                    <!-- Update Blog Button -->
                    <button type="submit" class="btn btn-primary">Update Blog</button>

                    <!-- Cancel Button (Redirect to Index Page) -->
                    <a href="{{ route('back_blog.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
