<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') :: Объявления</title>
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link href="/styles/main.css" rel="stylesheet"
              type="text/css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a href="{{ route('index') }}"
                class="navbar-brand mr-auto ">Main</a>
                @guest
                <a href="{{ route('register') }}"
                class="nav-item nav-link ">Registration</a>
                <a href="{{ route('login') }}"
                class="nav-item nav-link">Enter</a>
                @endguest
                @auth
                <a href="{{ route('home') }}"
                class="nav-item nav-link">My orders</a>
                <form action="{{ route('logout') }}" method="POST"
                    class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger"
                        value="Output">
                </form>
                @endauth
            </nav>
            <h1 class="my-3 text-center">Orders</h1>
            @yield('main')
        </div>
    </body>
</html>
