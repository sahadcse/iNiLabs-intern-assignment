<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TO-DO')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite(['resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar bg-primary navbar-expand-lg text-white" data-bs-theme="dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="{{ url('/') }}">SAH SOLYMAN</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/todos') }}">Get All Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/todos/create') }}">Insert New TODO</a>
                        </li>
                    </ul>
                    <form class="d-flex text-white" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>



    </header>

    <main class="my-5 container">
        @yield('content')
    </main>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <p class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">&copy; {{ date('Y') }} All Right Reserved By <a href="https://www.linkedin.com/in/sahaduzzaman-cse/" class="text-decoration-none">-SAHAD</a></p>
    </footer>
</body>

</html>