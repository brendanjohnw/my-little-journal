<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg shadow">
    
            <div class="container-fluid">
              <a class="navbar-brand" href="#">My Little Journal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a id="start" class="nav-link active" aria-current="page" href="{{route('displayHomePage')}}">Write</a>
                  </li>
                  <li class="nav-item">
                    <a id='my-musings' class="nav-link" href="{{route('displayMyMusingsPage')}}">My Musings</a>
                  </li>
                  <li class="nav-item">
                    <a id='assistant' class="nav-link" href="#">AI Assistant</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-fill py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-light text-center py-3">
            <div class="container">
                <small>&copy; {{ date('Y') }} My Little Journal. All rights reserved.</small>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    @vite(['resources/js/app.js'])
    @stack('scripts')

</body>
</html>
