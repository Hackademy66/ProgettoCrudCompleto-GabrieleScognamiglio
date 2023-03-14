<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('manga.index')}}">indice dei Manga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('manga.create')}}">inserisci dei Manga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('comic.index')}}">indice dei Fumetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('comic.create')}}">inserisci dei Fumetti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @auth
            Benvenuto {{Auth::user()->name}}
                @else Benvenuto Guest
            @endauth
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            @auth
            <li><a class="dropdown-item" href="#"onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
              <form id="form-logout" method="POST" action="{{route('logout')}}">@csrf</form>Log out</a></li>
            @endauth
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>