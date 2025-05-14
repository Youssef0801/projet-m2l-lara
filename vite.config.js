import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/css/style.css',
                'resources/css/dashboard.css',
                'resources/css/header.css',
                'resources/css/login.css',
                'resources/css/profile.css',
                'resources/js/app.js',
                'resources/favicon'],
            refresh: true,
        }),
    ],
});
