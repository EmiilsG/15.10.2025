<x-layout title="Produktu saraksts">
    <div class="product-list">
        @foreach ($products as $product)
            <div class="product-card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>

                <a class="button" href="{{ route('products.show', $product) }}">Show</a>
                <a class="button" href="{{ route('products.edit', $product) }}">Edit</a>

                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input class="button" type="submit" value="Delete" />
                </form>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 2rem;">
    
    </div>
</x-layout>
