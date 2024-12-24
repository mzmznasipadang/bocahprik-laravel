@extends('style.header')
@section('container')
<div class="container">
    <h1>Edit Quiz Question</h1>
    <form action="{{ route('quiz_questions.update', $quizQuestion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="quiz_id">Quiz</label>
            <select name="quiz_id" id="quiz_id" class="form-control">
                @foreach ($quizzes as $quiz)
                <option value="{{ $quiz->id }}" {{ $quiz->id == $quizQuestion->quiz_id ? 'selected' : '' }}>{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ $quizQuestion->question }}">
        </div>
        @for ($i = 1; $i <= 4; $i++)
        <div class="form-group">
            <label for="option_{{ $i }}">Option {{ $i }}</label>
            <input type="text" name="option_{{ $i }}" id="option_{{ $i }}" class="form-control" value="{{ $quizQuestion->{'option_'.$i} }}">
        </div>
        @endfor
        <div class="form-group">
            <label for="correct_answer">Correct Answer</label>
            <select name="correct_answer" id="correct_answer" class="form-control">
                <option value="option_1" {{ $quizQuestion->correct_answer == 'option_1' ? 'selected' : '' }}>Option 1</option>
                <option value="option_2" {{ $quizQuestion->correct_answer == 'option_2' ? 'selected' : '' }}>Option 2</option>
                <option value="option_3" {{ $quizQuestion->correct_answer == 'option_3' ? 'selected' : '' }}>Option 3</option>
                <option value="option_4" {{ $quizQuestion->correct_answer == 'option_4' ? 'selected' : '' }}>Option 4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
