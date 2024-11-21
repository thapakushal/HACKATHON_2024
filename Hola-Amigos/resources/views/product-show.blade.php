<!-- resources/views/product-show.blade.php -->

<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ${{ number_format($product->price, 2) }}</p>
