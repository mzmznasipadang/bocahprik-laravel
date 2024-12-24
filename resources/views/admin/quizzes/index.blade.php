@extends('style/header')
@section('container')
<div class="container">
    <h1>Manage Quizzes</h1>
    <a href="{{ route('quizzes.create') }}" class="btn btn-primary">Add New Quiz</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Section</th>
                <th>Title</th>
                <th>Passing Score</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->id }}</td>
                    <td>{{ $quiz->section->title }}</td>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->passing_score }}</td>
                    <td>
                        <a href="{{ route('quizzes.edit', $quiz) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('quizzes.destroy', $quiz) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
