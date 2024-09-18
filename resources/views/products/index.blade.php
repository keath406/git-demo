<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <a href="/products/create">Create New Product</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }} - ${{ $product->price }} ({{ $product->quantity }} in stock)
                <a href="/products/{{ $product->id }}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
