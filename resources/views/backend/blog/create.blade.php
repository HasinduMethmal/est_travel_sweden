@extends('backend.home')

@section('title', 'Create Blog')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Success message after storing the blog -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mb-4">
        <h5 class="card-header">Create New Blog Post</h5>
        <div class="card-body">
            <!-- Blog Create Form -->
            <form action="{{ route('back_blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="topic" class="form-label">Topic</label>
                    <textarea name="topic" id="topic" class="form-control @error('topic') is-invalid @enderror" rows="1" required>{{ old('topic') }}</textarea>
                    @error('topic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <!-- Create Blog Button -->
                    <button type="submit" class="btn btn-primary">Create Blog</button>

                    <!-- Cancel Button (Redirect to Index Page) -->
                    <a href="{{ route('back_blog.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
