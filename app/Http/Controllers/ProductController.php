<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 顯示商品列表
    public function index()
    {
        $products = Product::all(); // 獲取所有商品
        return view('products.index', compact('products'));
    }

    // 顯示新增商品表單
    public function create()
    {
        return view('products.create');
    }

    // 保存新增的商品
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', '商品新增成功');
    }

    // 顯示編輯商品表單
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // 更新商品資料
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect()->route('products.index')->with('success', '商品更新成功');
    }

    // 刪除商品
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', '商品刪除成功');
    }
}
