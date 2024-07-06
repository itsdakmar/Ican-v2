import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js", "resources/css/admin.css"],
            refresh: true,
        }),
    ],

    optimizeDeps: {
        include: [
            '@fortawesome/fontawesome-free/css/all.min.css',
        ],
    },
});
