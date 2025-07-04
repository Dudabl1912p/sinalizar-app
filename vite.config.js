import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/estilo.css',
                'resources/js/mascara-telefone.js',
                'resources/css/catalogo.css',
                'resources/css/catalogoF.css'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
