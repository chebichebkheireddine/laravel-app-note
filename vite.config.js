import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),  // Keep only this - remove PostCSS section
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        cors: true,  // Simplified CORS
        hmr: {
            host: '10.58.3.66',
        },
        allowedHosts: ['khiro', 'localhost', '10.58.3.66'],
    },
});
