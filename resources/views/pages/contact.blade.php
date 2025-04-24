@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar collapse" id="sidebarMenu">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <main class="col-md-4 ms-sm-auto col-lg-10 px-md-4 py-4" style="margin-top: 30px;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3">
                <button class="btn btn-sm btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                    <i class="bi bi-list"></i>
                </button>
                <h1 class="h3 mb-0">Contact Us</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white py-2">
                            <h2 class="h5 mb-0"><i class="bi bi-envelope me-2"></i>Send us a message</h2>
                        </div>
                        <div class="card-body p-4">
                            <form method="POST" action="/contact">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label small text-muted">Your Name</label>
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label small text-muted">Email</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label small text-muted">Message</label>
                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm py-2">
                                        <i class="bi bi-send-fill me-1"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
