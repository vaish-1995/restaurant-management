@extends('layouts.app')

@section('title', 'Restaurant Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar bg-light">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4" style="margin-top: 30px;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-3 mb-4 border-bottom">
                <h1 class="h2 mb-0">Dashboard Overview</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Today</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Week</button>
                    </div>
                </div>
            </div>

            <!-- Alert showing currency -->
            <div class="alert alert-info mb-4">
                <i class="bi bi-currency-dollar"></i> All amounts in Canadian Dollars (CAD)
            </div>

            <!-- Summary Cards -->
            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card text-white bg-primary h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Today's Orders</h5>
                                    <p class="card-text display-4 mb-0">24</p>
                                </div>
                                <i class="bi bi-cart3 fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card text-white bg-success h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Reservations</h5>
                                    <p class="card-text display-4 mb-0">8</p>
                                </div>
                                <i class="bi bi-calendar-check fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card text-white bg-info h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Menu Items</h5>
                                    <p class="card-text display-4 mb-0">42</p>
                                </div>
                                <i class="bi bi-menu-button-wide fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Metrics Row -->
            <div class="row mb-4">
                <!-- Total Sales -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted">
                                <i class="bi bi-cash-stack me-2"></i>TOTAL SALES
                            </h5>
                            <h2 class="text-primary">$1,245.50</h2>
                            <div class="mt-2">
                                <span class="badge bg-primary">Today</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Lost Sales -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted">
                                <i class="bi bi-x-circle me-2"></i>TOTAL LOST SALES
                            </h5>
                            <h2 class="text-danger">$245.75</h2>
                            <div class="mt-2">
                                <span class="badge bg-danger">Today</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Cash Payments -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title text-muted">
                                <i class="bi bi-coin me-2"></i>TOTAL CASH PAYMENTS
                            </h5>
                            <h2 class="text-success">$875.25</h2>
                            <div class="mt-2">
                                <span class="badge bg-success">Today</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Chart -->
            <!-- <div class="row mt-4">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="card-title mb-0">Weekly Sales Overview</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="salesChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
        </main>
    </div>
</div>
@endsection

