@extends('style/header')
@section('container')

<div class="container">
    <h1>Manage Materials</h1>
    <a href="{{ route('materials.create') }}" class="btn btn-primary mb-3">Create Material</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Section</th>
                <th>Title</th>
                <th>Type</th>
                <th>Content URL</th>
                <th>Duration</th>
                <th>Order Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $material->section->title }}</td>
                    <td>{{ $material->title }}</td>
                    <td>{{ $material->type }}</td>
                    <td>{{ $material->content_url }}</td>
                    <td>{{ $material->duration }}</td>
                    <td>{{ $material->order_number }}</td>
                    <td>
                        <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display:inline;">
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
