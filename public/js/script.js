// 等待 DOM 完全加載後執行
document.addEventListener('DOMContentLoaded', function () {
    // 選擇按鈕和文本區域
    const button = document.getElementById('myButton');
    const text = document.getElementById('myText');

    // 為按鈕設置點擊事件
    button.addEventListener('click', function () {
        text.textContent = "你剛剛點擊了按鈕！";
        text.style.color = "red";
    });
});

const button = document.getElementById('myButton');

button.addEventListener('click', function () {
    const newElement = document.createElement('p');
    newElement.textContent = '這是新添加的段落！';
    document.body.appendChild(newElement);
});
