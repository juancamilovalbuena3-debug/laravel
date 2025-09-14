import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import tailwindcss from '@tailwindcss/vite';
=======
>>>>>>> bea4d40d935c6c931ab5d9da09bd5336c3458aae

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
<<<<<<< HEAD
        tailwindcss(),
=======
>>>>>>> bea4d40d935c6c931ab5d9da09bd5336c3458aae
    ],
});
