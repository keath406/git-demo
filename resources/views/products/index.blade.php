@extends('layouts.app')

@section('content')
<div class="container">
    <h1>商品列表</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">新增商品</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>名稱</th>
                <th>價格</th>
                <th>數量</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">編輯</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('確定刪除這個商品嗎？')">刪除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
