import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
    server: {
        host: true,
        port: 5173,
        proxy: {
            '/api': {
                target: 'http://app:8080',
                changeOrigin: true,
                secure: false,
            },
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // ✅ добавь этот файл для стилей
                'resources/js/app.jsx',
            ],
            refresh: true,
        }),
        react(),
    ],
});
