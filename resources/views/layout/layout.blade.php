@include('layout.components.head')    
@include('layout.components.header')
  @include('layout.components.navbar')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container my-3">
      @yield('container')
    </div>
  </main>
@include('layout.components.javascript')