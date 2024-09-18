import './bootstrap';
import { createApp } from 'vue';

// 導入 Bootstrap 的 JavaScript 和 CSS
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

// 導入你剛剛創建的 Vue 組件
import TestPageComponent from './components/TestPageComponent.vue';

createApp({
    components: {
        TestPageComponent
    }
}).mount('#app');
