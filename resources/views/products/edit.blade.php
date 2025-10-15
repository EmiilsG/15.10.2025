<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="quantity" value="{{ $product->quantity }}">
    <textarea name="description">{{ $product->description }}</textarea>

    <input type="submit" value="Update">
</form>

<a href="{{ route('products.index') }}">Back to product list</a>
