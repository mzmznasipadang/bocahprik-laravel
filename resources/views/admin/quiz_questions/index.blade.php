@extends('style.header')
@section('container')
<div class="container">
    <h1>Quiz Questions</h1>
    <a href="{{ route('quiz_questions.create') }}" class="btn btn-primary mb-3">Create New Question</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Quiz</th>
                <th>Question</th>
                <th>Options</th>
                <th>Correct Answer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quizQuestions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->quiz->title }}</td>
                <td>{{ $question->question }}</td>
                <td>
                    1. {{ $question->option_1 }}<br>
                    2. {{ $question->option_2 }}<br>
                    3. {{ $question->option_3 }}<br>
                    4. {{ $question->option_4 }}
                </td>
                <td>{{ $question->{$question->correct_answer} }}</td>
                <td>
                    <a href="{{ route('quiz_questions.edit', $question) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('quiz_questions.destroy', $question) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
