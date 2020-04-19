let Mix = require("laravel-mix");
let PurgeCss = require("@fullhuman/postcss-purgecss")({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./resources/**/*.js",
    ],

    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
});

Mix.setPublicPath("public");

Mix.js("resources/js/app.js", "public/js");

Mix.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss")("./tailwind.config.js"),
    ...(process.env.NODE_ENV === "production" ? [PurgeCss] : []),
]);

if (Mix.inProduction()) {
    Mix.version();
}
