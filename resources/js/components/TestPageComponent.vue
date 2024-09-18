<template>
    <div class="container mt-5">
      <h2 class="text-center mb-4">Vue.js + Bootstrap 測試頁面</h2>
  
      <!-- 表單，用來添加新的項目 -->
      <div class="input-group mb-3">
        <input
          v-model="newItem"
          type="text"
          class="form-control"
          placeholder="輸入新項目"
          aria-label="輸入新項目"
        />
        <button class="btn btn-primary" @click="addItem">添加項目</button>
      </div>
  
      <!-- 使用 Bootstrap 的列表來顯示項目 -->
      <ul class="list-group">
        <li
          v-for="(item, index) in items"
          :key="index"
          class="list-group-item d-flex justify-content-between align-items-center"
        >
          {{ item }}
          <button class="btn btn-danger btn-sm" @click="removeItem(index)">刪除</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newItem: "", // 綁定輸入框
        items: ["項目1", "項目2", "項目3"], // 預設的列表項目
      };
    },
    methods: {
      addItem() {
        if (this.newItem.trim() !== "") {
          this.items.push(this.newItem); // 將新項目添加到列表
          this.newItem = ""; // 清空輸入框
        }
      },
      removeItem(index) {
        this.items.splice(index, 1); // 根據索引刪除項目
      },
    },
  };
  </script>
  
  <style scoped>
  h2 {
    color: #007bff;
  }
  </style>
  