<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Facebook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cerca su Facebook" aria-label="Search"/>
          <button class="btn btn-light" type="submit">Cerca</button>
        </form>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="dropdown-item" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </li>  
      @else            
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Utente
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
        </ul>
      </li>  
      @endauth
    </div>
  </div>
</nav>
</nav>
