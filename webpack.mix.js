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

 /*
 mix.js('resources/js/uno.js', 'public/js/app.js')
    .js('resources/js/dos.js', 'public/js/app.js');

//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.postCss('resources/css/estilo1.css', 'public/css/app.css')
    .postCss('resources/css/estilo2.css', 'public/css/app.css');

    */
//mix.sass('resources/scss/main.scss', 'public/css');

mix.postCss('resources/css/my-style.css', 'public/css',[
    require('tailwindcss')
])
    .postCss('resources/css/my-style2.css', 'public/css/my-style.css',[
        require('tailwindcss')
    ])