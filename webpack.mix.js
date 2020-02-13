let Mix = require("laravel-mix");

Mix.setPublicPath('public');

Mix.js('resources/js/app.js', 'public/js');

Mix.sass('resources/sass/app.scss', 'public/css');

if (Mix.inProduction()) {
    Mix.version();
}
