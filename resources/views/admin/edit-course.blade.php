@extends('style/header')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Edit Course</h5>
          <form action="{{ route('admin.update_course', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description">{{ $course->description }}</textarea>
            </div>
            <div class="mb-3">
              <label for="thumbnail" class="form-label">Thumbnail</label>
              <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
              @if ($course->thumbnail_url)
              <img src="{{ asset('storage/' . $course->thumbnail_url) }}" alt="{{ $course->title }}" class="img-thumbnail mt-3" style="width: 100px; height: 100px;">
              @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
