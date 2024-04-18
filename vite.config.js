import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/default.scss',
                'resources/sass/style.scss',
                'resources/js/main.js'
            ],
            refresh: true,
            detectTls: true
        }),
    ],
});
