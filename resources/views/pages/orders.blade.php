@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar bg-light">
            @include('partials.sidebar')
        </div>
        
        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4" style="margin-top: 30px;">

            <!-- Header Section with Fixed Top Padding -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-3 mb-4 border-bottom">
                <h1 class="h2 mb-0" style="font-size: 1.75rem;">Recent Orders</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-download"></i> Export
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="table-responsive rounded-3 shadow-sm">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-3">ID</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="pe-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="fw-bold ps-3">#{{ $order['id'] }}</td>
                            <td>{{ $order['customer'] }}</td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                    {{ $order['items'] }}
                                </span>
                            </td>
                            <td class="fw-bold">{{ $order['total'] }}</td>
                            <td>
                                <span class="badge 
                                    @if($order['status'] == 'Completed') bg-success
                                    @elseif($order['status'] == 'Preparing') bg-warning text-dark
                                    @else bg-secondary
                                    @endif">
                                    {{ $order['status'] }}
                                </span>
                            </td>
                            <td>{{ $order['date'] }}</td>
                            <td class="pe-3">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i> View
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