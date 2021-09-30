<!DOCTYPE html>
<html lang="">
<head>

    <title></title></head>
<body>
<header>
    <h1>Mein Shop</h1>
    <label>
        <input type="text" placeholder="Suche">
    </label>
</header>
<h2>Für Sie</h2>


<ul>
@foreach($products as $product)
    <li>{{ $product->name }} {{ $product->price }}</li>
@endforeach
</ul>


</body>


</html>
