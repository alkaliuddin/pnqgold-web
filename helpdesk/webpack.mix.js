const path = require('path');
const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath(path.normalize('../public_html/helpdesk/'));

mix.js("resources/js/app.js", "js")
    .sass("resources/sass/app.scss", "css")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .version();