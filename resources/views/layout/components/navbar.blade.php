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
            <span data-feather="mail"></span>
            Surat Masuk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('surat-keluar*') ? 'active' : '' }}" href="/surat-keluar">
            <span data-feather="external-link"></span>
            Surat Keluar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('disposisi*') ? 'active' : '' }}" href="/disposisi">
            <span data-feather="file-text"></span>
            Lembar Disposisi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kode') ? 'active' : '' }}" href="/kode">
            <span data-feather="hash"></span>
            Kode Pengarsipan
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Pengarsipan</span>
        {{-- <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a> --}}
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('arsip-aktif*') ? 'active' : '' }}" href="/arsip-aktif">
            <span data-feather="file-text"></span>
            Arsip Aktif
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Arsip Korespondensi
          </a>
        </li>
      </ul>
    </div>
  </nav>