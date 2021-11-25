<nav id="main-nav" class="slide-up-container">
    @foreach($categories as $category)
        <div>
            <a href="{{ route('category', ['category' => $category]) }}">{{ $category->name }}</a>
        </div>
    @endforeach
</nav>
