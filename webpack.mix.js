const mix = require('laravel-mix');

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

mix
    .setPublicPath('public')

    // Turns assets paths in css relative to css file
    .setResourceRoot("../")

    .js('resources/js/app.js', 'js')
    .js('resources/js/docs.js', 'js/docs.js')

    // Extract packages from node_modules, only those used by front and backend, to vendor.js
    .extract([
        "jquery",
        "popper.js",
        "bootstrap"
    ])

    .sass('resources/sass/laapp.scss', 'css')
    .sass('resources/sass/docs.scss', 'css/docs.css');

if (mix.inProduction()) {
    mix
        .version()
        .options({
            // Optimize JS minification process
            terser: {
                cache: true,
                parallel: true,
                sourceMap: false
            }
        });
} else {
    // Uses inline source-maps on development
    mix
        .sourceMaps()
        .webpackConfig({
            devtool: 'inline-source-map'
        });
}
