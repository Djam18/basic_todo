<!DOCTYPE html>
<html>
<head>
    <title>BasicTodo - @yield('title')</title>
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
