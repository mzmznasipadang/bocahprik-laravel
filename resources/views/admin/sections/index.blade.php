@extends('style/header')
@section('container')
<!-- resources/views/admin/sections/index.blade.php -->

<div class="container">
    <h1>Manage Sections</h1>
    <a href="{{ route('sections.create') }}" class="btn btn-primary mb-3">Create Section</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Course</th>
                <th>Title</th>
                <th>Order Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $section->course->title }}</td>
                    <td>{{ $section->title }}</td>
                    <td>{{ $section->order_number }}</td>
                    <td>
                        <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display:inline;">
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

