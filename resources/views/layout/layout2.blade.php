@include('layout.components.head')

@include('layout.components.navbar')

<div class="container my-3">
    @yield('container')
</div>

@include('layout.components.javascript')
@include('layout.components.footer')