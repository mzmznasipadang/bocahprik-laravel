@extends('style/header')
@section('container')
<!-- resources/views/admin/materials/edit.blade.php -->

<div class="container">
    <h1>Edit Material</h1>
    <form action="{{ route('materials.update', $material->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="section_id">Section</label>
            <select name="section_id" id="section_id" class="form-control">
                <option value="">Select Section</option>
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}" {{ $material->section_id == $section->id ? 'selected' : '' }}>{{ $section->title }}</option>
                @endforeach
            </select>
            @error('section_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $material->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" readonly value="{{ old('type', $material->type) }}">
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="file">Upload File (Leave blank if not changing)</label>
            <input type="file" name="file" id="file" class="form-control">
            @error('file')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration', $material->duration) }}">
            @error('duration')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="order_number">Order Number</label>
            <input type="number" name="order_number" id="order_number" class="form-control" value="{{ old('order_number', $material->order_number) }}">
            @error('order_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
