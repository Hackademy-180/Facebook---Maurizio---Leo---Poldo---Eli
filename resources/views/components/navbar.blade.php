<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">F</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Cerca su Facebook" aria-label="Search"/>
    </form>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
    </ul>
  </div>
  <div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Il mio profilo
        </a>
        <ul class="dropdown-menu">
          
          <li><a class="dropdown-item" href="{{route('login')}}">Log-in</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          <li><a class="dropdown-item" href="">Modifica profilo</a></li>
                      <li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
        </ul>
      </li>
    </ul>
  </div>  
</nav>