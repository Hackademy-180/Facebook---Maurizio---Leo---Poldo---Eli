<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">

    <!-- SINISTRA: Facebook + Search -->
    <div class="d-flex align-items-center">
      <a class="navbar-brand me-3" href="{{ route('home') }}"><i class="fa-brands fa-facebook fa-2x"></i></a>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search"
               placeholder="Cerca su Facebook">
        <button class="btn btn-light search-btn" type="submit">Cerca</button>
      </form>
    </div>

    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DESTRA: Utente -->
    <div class="collapse navbar-collapse justify-content-end"
         id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"
             data-bs-toggle="dropdown">
            Benvenuto {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
               
                <a href="{{route("index_profile")}}" class="list-group-item list-group-item-action py-3 px-3">Profilo</a>
             
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown mx-5">
          <a class="nav-link dropdown-toggle" href="#"
             data-bs-toggle="dropdown">
            Utente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
          </ul>
        </li>
        @endauth

        

      </ul>
    </div>

  </div>
</nav>