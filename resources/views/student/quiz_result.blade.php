@extends('student/layouts/header')
@section('container')
<main class="main">
    <section id="quiz-results" class="quiz-results section">
        <div class="container">
            <h1>Quiz Results</h1>
            
            @if($quizResults->isEmpty())
                <p>No quiz results found.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Quiz</th>
                            <th>Score</th>
                            <th>Completed At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizResults as $result)
                        <tr>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->quiz->title }}</td>
                            <td>{{ $result->score }}</td>
                            <td>{{ $result->completed_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>
</main>