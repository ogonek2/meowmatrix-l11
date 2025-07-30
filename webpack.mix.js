const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.options({
    processCssUrls: false,
    cache: true, // Включение кэширования
});

mix.browserSync({
    proxy: 'http://127.0.0.1:8000',
    open: false,
    port: 3001, // Укажи другой порт для Browsersync
    files: [
        'resources/**/*.php',
        'resources/**/*.js',
        'resources/**/*.scss',
        'public/**/*.{css,js}'
    ],
    watchOptions: {
        ignored: /node_modules/,
        persistent: true,
        interval: 1000, // Устанавливает интервал для отслеживания изменений
    },
    processCssUrls: false,
    cache: true, // Включение кэширования
});
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/content.scss', 'public/css')
    .sass('resources/sass/nav-bar.scss', 'public/css')
    .sass('resources/sass/windows.scss', 'public/css')
    .sass('resources/sass/elements.scss', 'public/css')
    .sass('resources/sass/fixed.scss', 'public/css')
    .sass('resources/sass/preloader.scss', 'public/css')
    .version();
