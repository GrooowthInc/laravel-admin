const {mix} = require('laravel-mix')
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
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });

mix.setResourceRoot('/nursery/');

mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'resources/assets/semantic/dist'),
            path.resolve(__dirname, 'node_modules')
        ]
    },
    devServer: {
        overlay: true,
        host:'0.0.0.0',
        proxy: {
            // プロキシ先（laradockのapache2のbackend-networkとコンテキスト）
            '*': '172.30.0.6/nursery/'
        },
        watchOptions: {
            aggregateTimeout: 300,
            poll: true
        }
    }
})

mix.ts('resources/assets/js/app.ts', 'public/js')
    .extract(
        [
            'axios',
            'jquery',
            'lodash',
            'moment',
            'vue',
            'vue-class-component',
            'vue-router'
        ],
        'public/js/vendor.js'  // windows特有の問題に対応（https://github.com/JeffreyWay/laravel-mix/issues/1091）
    )
    .sass('resources/assets/sass/app.scss', 'public/css')

mix.copyDirectory('resources/assets/semantic/dist/themes/', 'public/themes/')
// mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts/fontawesome')
mix.copyDirectory('resources/assets/images', 'public/images')

console.log("APP_URL:" + process.env.APP_URL)
console.log("NODE_ENV:" + process.env.NODE_ENV)

if (!mix.inProduction()) {
    mix.sourceMaps()
        .browserSync({
            // host: '172.29.0.3',
            // プロキシ先（laradockのapache2のbackend-networkとコンテキスト）
            proxy: '172.30.0.6/nursery/',
            open: false,
            files: [
                'resources/views/**/*.php',
                'app/**/*.php',
                'routes/**/*.php',
                "public/**/*.*"
            ],
            logLevel:
                "debug"
        })
} else {
    mix.version();
}
