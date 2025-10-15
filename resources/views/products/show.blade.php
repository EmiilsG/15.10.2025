<h1>{{ $product->name }}</h1>
<p>Quantity: {{ $product->quantity }}</p>
<p>{{ $product->description }}</p>

<a href="{{ route('products.index') }}">Back to all products</a>
