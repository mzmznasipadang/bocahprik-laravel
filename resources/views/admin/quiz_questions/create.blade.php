@extends('style.header')
@section('container')
<div class="container">
    <h1>Create Quiz Question</h1>
    <form action="{{ route('quiz_questions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="quiz_id">Quiz</label>
            <select name="quiz_id" id="quiz_id" class="form-control">
                @foreach ($quizzes as $quiz)
                <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" required>
        </div>
        @for ($i = 1; $i <= 4; $i++)
        <div class="form-group">
            <label for="option_{{ $i }}">Option {{ $i }}</label>
            <input type="text" name="option_{{ $i }}" id="option_{{ $i }}" class="form-control" required>
        </div>
        @endfor
        <div class="form-group">
            <label for="correct_answer">Correct Answer</label>
            <select name="correct_answer" id="correct_answer" class="form-control" required>
                <option value="option_1">Option 1</option>
                <option value="option_2">Option 2</option>
                <option value="option_3">Option 3</option>
                <option value="option_4">Option 4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
