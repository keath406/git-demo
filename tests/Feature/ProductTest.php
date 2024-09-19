<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_fetch_the_product_list()
    {
        // Arrange: 使用工廠創建一些商品
        Product::factory()->count(3)->create();

        // Act: 訪問商品列表頁面
        $response = $this->get('/products');

        // Assert: 確認回應狀態是200 OK
        $response->assertStatus(200);

        // Assert: 確認返回的HTML中包含所有商品
        $response->assertSeeText('商品列表');
        
        // 使用資料庫中的數據來確認商品名稱是否顯示在頁面上
        $products = Product::all();
        foreach ($products as $product) {
            $response->assertSeeText($product->name);
        }
    }

    /** @test */
    public function it_can_create_a_product()
    {
        // Arrange: 準備要提交的表單數據
        $productData = [
            'name' => 'Test Product',
            'price' => 99.99,
            'quantity' => 10,
        ];

        // Act: 模擬 POST 請求提交表單數據
        $response = $this->post('/products', $productData);

        // Assert: 確認回應狀態是302 (重定向)
        $response->assertStatus(302);

        // Assert: 確認資料庫中已新增該商品
        $this->assertDatabaseHas('products', [
            'name' => 'Test Product',
            'price' => 99.99,
            'quantity' => 10,
        ]);
    }
    /** @test */
    public function it_can_update_a_product()
    {
        // Arrange: 先創建一個商品
        $product = Product::factory()->create([
            'name' => 'Old Product Name',
            'price' => 50.00,
            'quantity' => 5,
        ]);

        // 新的商品數據
        $updatedProductData = [
            'name' => 'Updated Product Name',
            'price' => 75.50,
            'quantity' => 20,
        ];

        // Act: 發送 PUT 請求來更新商品
        $response = $this->put("/products/{$product->id}", $updatedProductData);

        // Assert: 確認回應狀態是302 (重定向)
        $response->assertStatus(302);

        // Assert: 確認資料庫中的商品數據已被更新
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated Product Name',
            'price' => 75.50,
            'quantity' => 20,
        ]);
    }
    /** @test */
    public function it_can_delete_a_product()
    {
        // Arrange: 先創建一個商品
        $product = Product::factory()->create();

        // Act: 發送 DELETE 請求來刪除商品
        $response = $this->delete("/products/{$product->id}");

        // Assert: 確認回應狀態是302 (重定向)
        $response->assertStatus(302);

        // Assert: 確認資料庫中不再有該商品
        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }


}
