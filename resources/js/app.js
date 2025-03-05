// const title = document.createElement('h1');
// title.textContent = 'Laravel 4| Vit.re';
// document.body.appendChild(title);

// ------------------------------------------
//Подключение vue из node_modules
import { createApp } from 'vue/dist/vue.esm-bundler';

import DropzoneComponent from './components/DropzoneComponent.vue';

import './bootstrap';

const app = createApp({
    el: '#app',

    components:{
        'dropzone-component': DropzoneComponent,
    }
});

app.mount('#app');

//для автоматической регистрации компонентов, возможно не будет работать в последних версиях по
// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {

//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);

// });