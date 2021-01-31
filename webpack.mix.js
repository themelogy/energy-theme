let mix = require('laravel-mix').mix;

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

const isProduction = process.env.NODE_ENV == "production" ? true : false;
const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'Themes/' + directory;
const dist   = 'public/themes/' + directory.toLowerCase();
const asset  = source + '/assets'

// Flags Copy
mix.copyDirectory('node_modules/flag-icon-css/flags', source + '/resources/flags');
mix.copyDirectory('node_modules/font-awesome/fonts', source + '/resources/fonts');
mix.copyDirectory('node_modules/lightslider/dist', source + '/resources/plugins/lightslider');
mix.copyDirectory('node_modules/lightgallery/dist', source + '/resources/plugins/lightgallery');
mix.copyDirectory('node_modules/lightbox2/dist', source + '/resources/plugins/lightbox2');

// Sass Generate
if(!isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix
    .sass(source + '/resources/sass/style.scss', dist + '/css')
    .sass(source + '/resources/sass/responsive.scss', dist + '/css')
    .sass('node_modules/font-awesome/scss/font-awesome.scss', dist + '/css')
    .options({
        processCssUrls: false
    });

mix.combine([
    source + '/resources/js/jquery.min.js',
    source + '/resources/js/bootstrap.min.js',
    source + '/resources/js/jquery.scrollUp.js',
    source + '/resources/js/offcanvas.js',
    source + '/resources/js/owl.carousel.js',
    source + '/resources/js/jquery.matchHeight.js',
    'node_modules/jquery-lazy/jquery.lazy.min.js'
], dist + '/js/combined.js');

if(isProduction) {
    mix.version();
}

// Copy Directory to asset
mix.copyDirectory(source + '/resources', dist);

mix.minify(dist + '/js/script.js');

// Browser Sync
if(!isProduction) {
    mix
        .browserSync(
        {
            proxy: 'ykenerji.test',
            files: [source + '/**/*.*']
        }
    );
}