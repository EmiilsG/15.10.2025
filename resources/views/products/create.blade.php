<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}">
    <input type="number" name="quantity"  value="{{ old('quantity') }}">
    <textarea name="description"></textarea>
    <input type="submit" value="Submit">
</form>

<a href="{{ route('products.index') }}">Back to product list</a>
