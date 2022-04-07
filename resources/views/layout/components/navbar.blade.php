<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/home"> <strong>SiRatma</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('surat-masuk*') ? 'active' : '' }}" href="/surat-masuk">Surat Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('surat-keluar*') ? 'active' : '' }}" href="/surat-keluar">Surat Keluar</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          {{-- @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">  
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log out </button>
                </form>
              </li>
            </ul>
          </li>
          @else --}}
          <li class="nav-item">
            <form action="/logout" method="post">  
              @csrf
              <button type="submit" class="nav-link px-3 border-0 bg-primary"> Log out <span data-feather="log-out"></span></button>
            </form>
          </li>
          {{-- @endauth --}}
        </ul>
      </div>
    </div>
  </nav>
