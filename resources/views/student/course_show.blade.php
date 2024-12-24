@extends('student.layouts.header')

@section('container')
<main class="main">
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <!-- Bagian Kiri: Title, Deskripsi, dan Tombol -->
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{ $course->title }}</h1>
                    <p data-aos="fade-up" data-aos-delay="100">{{ $course->description }}</p>
                    <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('quiz.start', $course->id) }}" class="btn-get-started">Kerjakan Quiz <i class="bi bi-arrow-right"></i></a>

                        @if($video)
                        <a href="{{ route('videos.stream', ['filename' => $video->content_url]) }}" 
                            class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0">
                             <i class="bi bi-play-circle"></i>
                             <span>Tonton Video</span>
                         </a>
                         
                        @endif
                    </div>
                </div>
                <!-- Bagian Kanan: Gambar -->
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    @if ($course->thumbnail_url)
                        <img src="{{ asset('storage/' . $course->thumbnail_url) }}" class="img-fluid animated" alt="{{ $course->title }}">
                    @else
                        <img src="https://via.placeholder.com/500x300" class="img-fluid animated" alt="No Image">
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>

