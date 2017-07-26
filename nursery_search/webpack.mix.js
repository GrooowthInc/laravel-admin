const {
    mix
} = require('laravel-mix')
const path = require('path')
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
// Full API
// mix.js(src, output);
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.combine(files, destination);
// mix.copy(from, to);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.

mix.setResourceRoot('/hokatsu/');

mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'resources/assets/semantic/dist'),
            path.resolve(__dirname, 'node_modules')
        ]
    }
})

mix.js('resources/assets/js/app.js', 'public/js')
    .extract(['vue'])
    .sass('resources/assets/sass/app.scss', 'public/css')

mix.copy('resources/assets/semantic/dist/themes/', 'public/themes/', false)
mix.copy('node_modules/font-awesome/fonts', 'public/fonts/fontawesome', false)
mix.copy('resources/assets/images', 'public/images', false)
if (mix.config.inProduction) {
    // mix.version();
}

if (mix.config.inDevelopment) {
    mix.sourceMaps()
}