@extends('student/layouts/header')
@section('container')
<main class="main">
    <br>
    <br>
    <br>
    <section id="values" class="values section py-5">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                        <div class="card h-100 shadow" data-aos="zoom-in" data-aos-delay="100">
                            @if ($course->thumbnail_url)
                                <img src="{{ asset('storage/' . $course->thumbnail_url) }}" class="card-img-top" alt="{{ $course->title }}">
                            @else
                                <span class="d-block text-center p-3 bg-light">No Image</span>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Lihat Kursus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

