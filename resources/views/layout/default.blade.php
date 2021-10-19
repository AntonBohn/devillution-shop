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
    @include('components.main-nav')
    <div class="icons">
        <div class="button-account">
            <span class="iconify" data-icon="mdi-account-outline"></span>
        </div>
        <div class="button-cart">
            <span class="iconify" data-icon="mdi-cart-outline"></span>
        </div>
        <div class="button-menu">
            <span class="iconify" data-icon="mdi-menu"></span>
        </div>
    </div>
</body>
</html>
