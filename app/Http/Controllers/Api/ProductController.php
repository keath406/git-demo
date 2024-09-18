<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 讀取所有商品
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // 讀取單個商品
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    // 新增商品
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    // 更新商品
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|numeric',
                'quantity' => 'required|integer',
            ]);

            $product->update($validated);
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    // 刪除商品
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted']);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
