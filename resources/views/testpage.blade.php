<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue + Bootstrap Test Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- 引入 Vite 編譯的資源 -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">這是 Vue + Bootstrap 測試頁面</h1>

        <p class="lead text-center">這是靜態的內容，與 Vue.js 動態組件一起顯示。</p>

        <!-- 添加一個靜態表格 -->
        <h3 class="mb-3">靜態表格</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">名稱</th>
                    <th scope="col">描述</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>商品A</td>
                    <td>這是一個示例商品。</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>商品B</td>
                    <td>這是另一個示例商品。</td>
                </tr>
            </tbody>
        </table>

        <hr>

        <!-- 這裡將渲染 Vue.js 組件 -->
        <h3 class="mb-3">Vue.js 動態內容</h3>
        <div id="app">
            <test-page-component></test-page-component> <!-- Vue 組件 -->
        </div>
    </div>
</body>
</html>
