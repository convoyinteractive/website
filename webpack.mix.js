let Mix = require("laravel-mix");

Mix.setPublicPath("public");

Mix.js("resources/js/app.js", "public/js");

Mix.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss")("./tailwind.config.js"),
]);

if (Mix.inProduction()) {
    Mix.version();
}
