<!DOCTYPE html>
<html lang="">
<head>
    @include('layout.html-head')
</head>
<body class="{{ $bodyClass }}">
    <header>
        <a href="{{ route('home') }}"><span class="iconify logo" data-icon="mdi-nuke"></span></a>
        <h2>NUKE WARE STORE</h2>
    </header>
    <div class="content">
        @yield('content')
        <footer>
            @include('layout.footer')
        </footer>
    </div>
    @include('components.mini-search.form')
    @include('components.main-nav')
    @include('components.action-icons')
</body>
</html>
