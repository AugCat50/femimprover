import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/variables.css',
                'resources/css/main.css',
                'resources/css/mainFix.css'
            ],
            // refresh: true
            refresh: 'public/assets/**',
        }),
    ],
});
