<x-layout title="{{ $product->name }}">
    <div class="product-card">
        <h2>{{ $product->name }}</h2>
        <p>Quantity: {{ $product->quantity }}</p>
        <p>{{ $product->description }}</p>

        <a class="button" href="{{ route('products.index') }}">Back to all products</a>
    </div>
</x-layout>
