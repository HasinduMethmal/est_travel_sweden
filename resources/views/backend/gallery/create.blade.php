@extends('backend.home')

@section('title', 'Dashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  @if(session('success')) <!-- Change this to session('success') -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }} <!-- Display the success message here -->
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <!-- Upload Gallery -->
      <div class="col-12">
        <div class="card">
          <h5 class="card-header">Upload Gallery</h5>
          <div class="card-body">
            <!-- Update form to handle multiple file uploads -->
            <form action="{{ route('back_gallery.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="images[]" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required multiple>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>
      <!-- /Upload Gallery -->
    </div>
  </div>
</div>

@endsection
