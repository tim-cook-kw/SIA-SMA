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

mix.js('resources/js/app.js', 'public/js')
    // for datatables
    .scripts([
        'node_modules/datatables.net/js/jquery.dataTables.min.js',
        'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'
    ], 'public/js/datatable.js')
    .styles(['node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'], 'public/css/datatable.css')
    //for moment.js
    .scripts([
        'node_modules/moment/moment.js'
    ], 'public/js/moment.js')
    //for nprogress.js
    .scripts([
        'node_modules/nprogress/nprogress.js'
    ], 'public/js/nprogress.js')
    .styles([
        'node_modules/nprogress/nprogress.css'
    ], 'public/css/nprogress.css')
    .scripts([
        'node_modules/chosen-js/chosen.jquery.js',
        'node_modules/chosen-js/chosen.proto.js'
    ], 'public/js/chosen.js')
    .styles([
        'node_modules/bootstrap4c-chosen/dist/css/component-chosen.css'
    ], 'public/css/component-chosen.css')
    .sass('resources/sass/app.scss', 'public/css');
