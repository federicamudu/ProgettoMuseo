<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="/storage/media/pngegg.png" class="logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opere
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('opera.index')}}">Tutte</a></li>
                        <li><a class="dropdown-item" href="{{route('painting.index')}}">Quadri</a></li>
                        <li><a class="dropdown-item" href="{{route('sculpture.index')}}">Statue</a></li>
                        <li><a class="dropdown-item" href="{{route('repert.index')}}">Reperti</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('museum.index')}}">Musei</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contactUs.index')}}">Contattaci</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Entra
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                    </ul>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Esci
                    </a>
                    <ul class="dropdown-menu">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>