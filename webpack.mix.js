const mix = require('laravel-mix');

mix.js( 'resources/js/app.js', 'public/js' )
    .postCss( 'resources/css/app.css', 'public/css', [
        // 
    ])
    .sourceMaps();

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
    })
    .sourceMaps();

mix.browserSync( 'http://192.168.10.10/' );
