@extends('student.layouts.header')

@section('container')
<main class="main">
    <section id="quiz" class="quiz section">
        <div class="container">
            <h1>Quiz untuk Kursus</h1>

            <form action="{{ route('quiz.submit') }}" method="POST">
                @csrf
                @foreach($quizzes as $quiz)
                    <div class="card my-4">
                        <div class="card-header">
                            <h2>{{ $quiz->title }}</h2>
                            <p><strong>Passing Score:</strong> {{ $quiz->passing_score }}%</p>
                        </div>
                        <div class="card-body">
                            @foreach($quiz->questions as $question)
                                <div class="mb-4">
                                    <p><strong>Pertanyaan:</strong> {{ $question->question }}</p>
                                    <div>
                                        <input type="radio" name="question_{{ $question->id }}" value="option_1" required>
                                        <label>{{ $question->option_1 }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="question_{{ $question->id }}" value="option_2" required>
                                        <label>{{ $question->option_2 }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="question_{{ $question->id }}" value="option_3" required>
                                        <label>{{ $question->option_3 }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="question_{{ $question->id }}" value="option_4" required>
                                        <label>{{ $question->option_4 }}</label>
                                    </div>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </section>
</main>