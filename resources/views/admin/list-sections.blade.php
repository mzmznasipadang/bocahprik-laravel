@extends('style/header')
@section('container')
<div class="container">
    <h1>Sections for {{ $course->title }}</h1>
    <a href="{{ route('admin.create_section', $course) }}" class="btn btn-primary">Add New Section</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $section->title }}</td>
                    <td>{{ $section->order_number }}</td>
                    <td>
                        <a href="{{ route('admin.edit_section', $section) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.delete_section', $section) }}" method="POST" style="display: inline-block;">
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
@endsection
