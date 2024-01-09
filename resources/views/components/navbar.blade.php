<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">inserisci annuncio</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Area personale
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            </ul>
          </li>
            @endguest
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hello {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{-- <li>
                        <a class="dropdown-item" href="{{route('articoli.utente')}}">I miei articoli</a>
                    </li> --}}
                    <li><a class="dropdown-item" href="{{route('logout')}}"class="nav-link text-primary" onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
                        <form action="/logout" method="POST" class="d_none" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
            {{-- @guest
            <li class="nav-item"><a class="nav-link text-primary" href="{{route('login')}}">Log in</a></li>
            <li class="nav-item"><a class="nav-link  " href="{{route('register')}}">Sign in</a></li>
            @endguest --}}
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>
</nav>
