<header>
  <div class="header-container">
    <h1>BOOLFLIX</h1>

    <nav>
      <ul class="navbar-menu">
        <li class="{{ Route::current()->getName() === 'home' ? 'current' : '' }}">
          <a href="{{ route('home') }}">Film</a>
        </li>
        <li class="{{ Route::current()->getName() === 'serie' ? 'current' : '' }}">
          <a href="{{ route('serie') }}">Serie</a>
        </li>
        <li class="{{ Route::current()->getName() === 'anime' ? 'current' : '' }}">
          <a href="{{ route('anime') }}">Anime</a>
        </li>
        <li class="{{ Route::current()->getName() === 'get_premium' ? 'current' : '' }}">
          <a href="{{ route('get_premium') }}">Get Premium</a>
        </li>
      </ul>
    </nav>

    <nav>
      <ul class="login-menu">                     
        <li><a href="#">Login</a></li>
        <li><i class="fa-solid fa-gear"></i></li>
      </ul>
    </nav>
  </div>
</header>