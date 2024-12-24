@extends('style/header')
@section('container')

    <h1>Create Quiz</h1>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="section_id">Section</label>
            <select name="section_id" id="section_id" class="form-control" required>
                @foreach($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Quiz Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="passing_score">Passing Score</label>
            <input type="number" name="passing_score" id="passing_score" class="form-control" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

