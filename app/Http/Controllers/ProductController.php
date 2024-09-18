<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 顯示所有商品
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    // 顯示新增商品的表單
    public function create()
    {
        return view('products.create');
    }

    // 處理新增商品表單的提交
    public function store(Request $request)
    {
        // 表單驗證
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        // 儲存商品資料
        Product::create($validated);

        return redirect('/products')->with('success', 'Product created successfully!');
    }

    // 顯示編輯商品的表單
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    // 處理更新商品的表單提交
    public function update(Request $request, $id)
    {
        // 表單驗證
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        // 查找並更新商品
        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect('/products')->with('success', 'Product updated successfully!');
    }

    // 刪除指定商品
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfully!');
    }
}
