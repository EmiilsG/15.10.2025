<x-layout title="Edit Product">
    @if ($errors->any())
        <div class="alert-error">
            <strong>Kļūda!</strong> Lūdzu, izlabo sekojošās kļūdas:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $product->name) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input
                type="number"
                name="quantity"
                id="quantity"
                value="{{ old('quantity', $product->quantity) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea
                name="description"
                id="description"
                rows="5"
                required
            >{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-actions">
            <input type="submit" class="button" value="Update">
            <a class="button secondary" href="{{ route('products.index') }}">Back to product list</a>
        </div>
    </form>
</x-layout>
