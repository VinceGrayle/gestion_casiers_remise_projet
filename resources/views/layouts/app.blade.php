<!doctype html>
<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="/">GESTCasiers</a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Louer un casier</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Casier
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/locker/manage">Gérer les casiers</a>
                        <a class="dropdown-item" href="/locker/create">Créer un nouveau casier</a>
                    </div>
                </li>
            </ul>
        </nav>

        @yield('content')
    </div>
</body>

</html>