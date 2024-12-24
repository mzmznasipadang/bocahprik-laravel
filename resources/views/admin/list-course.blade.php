@extends('style/header')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
            <h5 class="card-title fw-semibold">Manage Courses</h5>
            <a href="{{ route('admin.create_course') }}" class="btn btn-primary">Add New Course</a>
          </div>
          @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($courses as $course)
              <tr>
                <td>
                  @if ($course->thumbnail_url)
                  <img src="{{ asset('storage/' . $course->thumbnail_url) }}" alt="{{ $course->title }}" class="img-thumbnail" style="width: 100px; height: 100px;">

                  @else
                  <span>No Image</span>
                  @endif
                </td>
                <td>{{ $course->title }}</td>
                <td>{{ Str::limit($course->description, 50) }}</td>
                <td>
                  <a href="{{ route('admin.edit_course', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('admin.delete_course', $course->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
