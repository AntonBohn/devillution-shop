@extends('layout.default')

@section('content')
    @include('components.hero', ['header' => 'Lorem ipsum dolor sit amet', 'image' => 'https://images.unsplash.com/photo-1586078875290-c22eb791ad5d?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE3MTN8Sjl5clBhSFhSUVl8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'])
    <main>
        @include('components.catalog.product.mini-list', ['title' => 'Für Sie empfohlen', 'products' => $products])
        <div class="text-content">
            <h3 class="content-headline">Lorem ipsum dolor sit amet.</h3>
            <div class="content-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad debitis deserunt nisi quam qui totam!
                    Adipisci animi consequatur corporis earum error exercitationem explicabo harum ipsa iure nisi nulla
                    perspiciatis provident quibusdam quod, repellat repellendus sequi sit soluta voluptas voluptatum. Ab
                    adipisci aut excepturi ipsam modi, nemo nesciunt, nobis pariatur placeat quae ratione rem tempore!
                    Adipisci alias beatae corporis delectus dignissimos est excepturi facere inventore labore laborum
                    nobis non officia perferendis placeat qui recusandae repellendus sunt unde, veniam voluptas. A ea et
                    eum illum in incidunt obcaecati unde! A ab aliquam blanditiis cum deleniti dolore eveniet excepturi
                    hic ipsam ipsum itaque labore nobis obcaecati provident quaerat, rerum sint sunt tempore, temporibus
                    voluptatibus. Animi autem cupiditate delectus deleniti ea eos est et facilis in laboriosam maiores,
                    minus natus nemo nisi quasi qui quidem sint, suscipit vel veniam! Blanditiis, corporis cupiditate
                    dolorum esse eum illo necessitatibus numquam possimus similique? Ab, sapiente, voluptatibus.
                </p>
            </div>
        </div>
        @include('components.catalog.product.mini-list', ['title' => 'Best Seller', 'products' => $bestsellers])
    </main>
@endsection
