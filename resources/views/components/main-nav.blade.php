<nav id="main-nav" class="slide-up-container">
    @foreach($categories as $category)
        <div>
            <a href="/category-{{ $category->id }}">{{ $category->name }}</a>
        </div>
    @endforeach
</nav>
