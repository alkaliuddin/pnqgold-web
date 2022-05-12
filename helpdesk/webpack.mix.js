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


if (mix.inProduction()) {
    mix.setPublicPath(path.normalize('../public_html/helpdesk/'));
  } else {
    mix.setPublicPath(path.normalize('../public_html/'));
  }

mix.js("resources/js/app.js", "js")
    .sass("resources/sass/app.scss", "css")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .version();