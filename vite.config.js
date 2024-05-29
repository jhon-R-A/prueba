import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/estilos.css",
                "resources/css/lightbox.css",
                "resources/css/normalize.css",
                "resources/js/animation.js",
                "resources/js/carrusel.js",
                "resources/js/script.js",
                "resources/js/serv-carrusel.js",
            ],
            refresh: true,
        }),
    ],
});
