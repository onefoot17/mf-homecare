const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js( 'resources/js/app.js', 'public/js' )
    .postCss( 'resources/css/app.css', 'public/css', [
        // 
    ])

mix.sass( 'resources/sass/frontend.scss', 'public/css' )
    .options({
        /* autoprefixer: {
            options: {
                browsers: [
                    'last 6 versions',
                ]
            }
        }, */
        postCss: [
            require( 'postcss-css-variables' ) ()
        ]
    });

mix.browserSync( 'http://192.168.10.10/' );
