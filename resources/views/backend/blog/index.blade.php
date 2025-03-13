@extends('backend.home')

@section('title', 'Blog Index')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Success message after creating or updating a blog -->
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Add New Blog Button -->
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('back_blog.create') }}" class="btn btn-primary">Add New Blog</a>
    </div>

    <!-- Blog Table -->
    <div class="card">
        <h5 class="card-header">All Blogs</h5>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>topic</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ Str::limit($blog->description, 50) }}</td>
                            <td>{{$blog->topic}}</td>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Image" width="100">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('back_blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Delete Button with Confirmation -->
                                <form action="{{ route('back_blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
