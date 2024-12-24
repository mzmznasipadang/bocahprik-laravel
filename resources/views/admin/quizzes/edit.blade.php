@extends('style/header')
@section('container')
<div class="container">

        <h1>Edit Quiz</h1>
        <form action="{{ route('quizzes.update', $quiz) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="section_id">Section</label>
                <select name="section_id" id="section_id" class="form-control" required>
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}" {{ $quiz->section_id == $section->id ? 'selected' : '' }}>
                            {{ $section->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Quiz Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $quiz->title }}" required>
            </div>
            <div class="form-group">
                <label for="passing_score">Passing Score</label>
                <input type="number" name="passing_score" id="passing_score" class="form-control" value="{{ $quiz->passing_score }}" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    
</div>
@endsection
