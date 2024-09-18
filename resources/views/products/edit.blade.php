<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}">
        <br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $product->price }}">
        <br>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{ $product->quantity }}">
        <br>

        <button type="submit">Update Product</button>
    </form>

    <a href="/products">Back to Product List</a>
</body>
</html>
