<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ Auth::user()->name }} Dashboard</title> --}}
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <section class="main-content">
        <!-- Navbar -->
        @include('components.navbar')

        <!-- Page Content -->
        <section class="page-content">
            @yield('content')
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
