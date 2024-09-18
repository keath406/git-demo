<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Basics</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>歡迎來到 HTML 基礎教學！</h1>
    <p>這是你的第一個 HTML 頁面，它顯示了一些基本的 HTML 元素。</p>
    <a href="https://www.google.com" target="_blank">點擊這裡訪問 Google</a>
    <img src="https://via.placeholder.com/150" alt="示例圖片">
    <form action="/submit-form" method="POST">
        @csrf
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name">
        <button type="submit">提交</button>
    </form>
    <div class="box">這是一個盒模型範例</div>
        <div class="container">
        <div class="item">項目 1</div>
        <div class="item">項目 2</div>
        <div class="item">項目 3</div>
    </div>
        <div class="grid-container">
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>
    </div>
    <div class="animated-box"></div>
    
    <h1>JavaScript 基礎互動教學</h1>

    <!-- 增加一個按鈕和一個顯示文本的區域 -->
    <button id="myButton">點擊我</button>
    <p id="myText">點擊上面的按鈕，看看會發生什麼！</p>

    <!-- 引入 JavaScript 文件 -->
    <script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
