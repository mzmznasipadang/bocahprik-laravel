@extends('layouts/header')
@section('container')

<main class="main">
    <br>
<br>
<br>
<section id="login" class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <!-- Card Login -->
          <div class="card shadow-lg border-0">
            <div class="card-body p-4">
              <!-- Judul Form -->
              <h2 class="text-center fw-bold mb-4">Login</h2>
              
              <!-- Form -->
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Input Email -->
                <div class="mb-3">
                  <label for="email" class="form-label fw-bold">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
  
                <!-- Input Password -->
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
  
                <!-- Tombol Login -->
                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-primary fw-bold">Login</button>
                </div>
              </form>
  
              <!-- Link Register -->
              <p class="text-center mt-3 mb-0">
                Don’t have an account? 
                <a href="/register" class="text-primary fw-bold text-decoration-none">Register here!</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>