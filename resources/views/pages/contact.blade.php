@extends('layouts.app') <!-- If you have a layout file -->

@section('content')
    <form method="POST" action="/contact" class="container mt-5 mb-5" style="max-width: 600px;">
        @csrf
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="h4 mb-0">Contact Us</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="bi bi-send-fill me-2"></i> Send Message
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection