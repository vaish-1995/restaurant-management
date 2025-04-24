@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card login-card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4><i class="bi bi-box-arrow-in-right"></i> Restaurant Admin</h4>
                </div>
                <div class="card-body p-4">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="username" 
                                   name="username" 
                                   required
                                   placeholder="Enter admin">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" 
                                   class="form-control" 
                                   id="password" 
                                   name="password" 
                                   required
                                   placeholder="Enter admin123">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-light">
                    <small class="text-muted">Default: admin / admin123</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection