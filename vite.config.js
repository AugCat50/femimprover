import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
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
