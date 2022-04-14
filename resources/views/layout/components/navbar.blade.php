<div class="container-fluid">
    <div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('surat-masuk*') ? 'active' : '' }}" href="/surat-masuk">
            <span data-feather="file"></span>
            Surat Masuk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('surat-keluar*') ? 'active' : '' }}" href="/surat-keluar">
            <span data-feather="shopping-cart"></span>
            Surat Keluar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('disposisi*') ? 'active' : '' }}" href="/disposisi">
            <span data-feather="users"></span>
            Lembar Disposisi
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>
      </ul>
    </div>
  </nav>