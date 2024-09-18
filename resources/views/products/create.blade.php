<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        <br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ old('price') }}">
        <br>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{ old('quantity') }}">
        <br>

        <button type="submit">Create Product</button>
    </form>

    <a href="/products">Back to Product List</a>
</body>
</html>
