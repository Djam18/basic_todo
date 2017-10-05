<!DOCTYPE html>
<html>
<head>
    <title>BasicTodo - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('partials.nav')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} BasicTodo</p>
    </footer>
</body>
</html>
