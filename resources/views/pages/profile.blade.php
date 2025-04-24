@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Profile Information</h3>
                </div>
                
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset($user['avatar']) }}" 
                                 class="img-thumbnail rounded-circle" 
                                 width="150" 
                                 alt="Profile Picture">
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $user['name'] }}</h4>
                            <p class="text-muted">{{ $user['email'] }}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" value="{{ $user['age'] }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <input type="text" class="form-control" value="{{ $user['gender'] }}" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" rows="3" readonly>{{ $user['address'] }}</textarea>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="/" class="btn btn-primary">
                            <i class="bi bi-arrow-left me-1"></i> Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection