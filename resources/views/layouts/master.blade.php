<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            margin-left: 250px;
        }
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
