<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('partials.head')
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<!-- Your custom CSS -->
<link href="{{ asset('style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
   @section('content')
   @if(!request()->is('login'))
       @include('partials.header') <!-- Only show header if not on login page -->
   @endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>



