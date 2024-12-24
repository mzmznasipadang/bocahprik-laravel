@extends('layouts/header')
@section('container')

<main class="main">
    <br>
    <br>
    <br>
<section id="register" class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <!-- Card Registrasi -->
          <div class="card shadow-lg border-0">
            <div class="card-body p-4">
              <!-- Judul Form -->
              <h2 class="text-center fw-bold mb-4">Register</h2>
  
              <!-- Menampilkan Error Jika Ada -->
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
  
              <!-- Form -->
              <form action="{{ route('register') }}" method="POST">
                @csrf
  
                <!-- Input Name -->
                <div class="mb-3">
                  <label for="name" class="form-label fw-bold">Name</label>
                  <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name" required>
                </div>
  
                <!-- Input Email -->
                <div class="mb-3">
                  <label for="email" class="form-label fw-bold">Email</label>
                  <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" required>
                </div>
  
                <!-- Input Password -->
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
  
                <!-- Input Confirm Password -->
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                </div>
  
                <!-- Tombol Register -->
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-success fw-bold">Register</button>
                </div>
              </form>
  
              <!-- Link Login -->
              <p class="text-center mt-3 mb-0">
                Already have an account? 
                <a href="/login" class="text-primary fw-bold text-decoration-none">Login here!</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  