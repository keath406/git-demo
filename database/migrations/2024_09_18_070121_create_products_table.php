<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // 自動生成的主鍵
            $table->string('name'); // 產品名稱
            $table->decimal('price', 8, 2); // 價格，最多 8 位數，精度到小數點後兩位
            $table->integer('quantity'); // 數量
            $table->timestamps(); // 創建時間和更新時間
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
