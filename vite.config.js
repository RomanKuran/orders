import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/admin/global/global.js',
                'resources/sass/admin/pages/users/users.scss',
                'resources/js/admin/pages/users/users.js',
                'resources/js/admin/pages/services/services.js',
                'resources/js/admin/pages/orders/orders.js',
            ],
            refresh: true,
        }),
    ],
});
