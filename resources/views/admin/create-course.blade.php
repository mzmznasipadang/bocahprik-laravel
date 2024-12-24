@extends('style/header')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Add New Course</h5>
          <form action="{{ route('admin.store_course') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
              <label for="thumbnail" class="form-label">Thumbnail</label>
              <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
