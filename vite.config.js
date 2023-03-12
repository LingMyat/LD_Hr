import { defineConfig } from 'vite';
import path from 'path';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true,

        }),

    ],
    resolve: {
        alias: {
            '~mdb-ui-kit': path.resolve(__dirname, 'node_modules/mdb-ui-kit'),
        }
    }
});
