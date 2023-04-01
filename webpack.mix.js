//Configure Laravel Mix
const mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass', 'public/css') //use Laravel mix to compile file .scss into .css