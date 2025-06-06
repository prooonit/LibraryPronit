<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>

    <!-- Bootstrap CSS (minimal styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Simple Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand text-white" href="{{ url('/') }}">LibraryApp</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('books.index') }}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('members.index') }}">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('issues.index') }}">Issued Books</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS (optional, for responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
