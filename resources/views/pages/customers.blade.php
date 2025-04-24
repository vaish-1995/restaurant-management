@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar">
            @include('partials.sidebar')
        </div>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4" style="margin-top: 30px;">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Customers</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-plus-circle"></i> Add Customer
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Visits</th>
                            <th>Last Visit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer['id'] }}</td>
                            <td>{{ $customer['name'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td>
                                <span class="badge bg-primary rounded-pill">
                                    {{ $customer['visits'] }}
                                </span>
                            </td>
                            <td>{{ $customer['last_visit'] }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection