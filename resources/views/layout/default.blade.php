<!DOCTYPE html>
<html lang="">
<head>
    @include('layout.html-head')
</head>
<body>
    <header>
        <span class="iconify logo" data-icon="mdi-nuke"></span>
        <h2>NUKE WARE STORE</h2>
    </header>
    <div class="content">
        <main>
            @yield('content')
        </main>
        <footer>
            @include('layout.footer')
        </footer>
    </div>
    @include('components.mini-search')
    @include('components.main-nav')
    @include('components.action-icons')
</body>
</html>
