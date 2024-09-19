@extends('layouts.app')

@section('content')
<div class="container">
    <h1>編輯商品</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">商品名稱</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">價格</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">數量</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}">
        </div>
        <button type="submit" class="btn btn-primary">更新商品</button>
    </form>
</div>
@endsection
