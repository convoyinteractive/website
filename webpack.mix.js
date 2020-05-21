let Mix = require("laravel-mix");
let Sw = require("sw-precache-webpack-plugin");

Mix.setPublicPath("public");

Mix.webpackConfig({
    plugins: [
        new Sw({
            cacheId: "pwa",
            filename: "service-worker.js",
            staticFileGlobs: [
                "public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}",
            ],
            minify: true,
            stripPrefix: "public/",
            handleFetch: true,
            dynamicUrlToDependencies: {
                "/": ["resources/views/default.blade.php"],
            },
            staticFileGlobsIgnorePatterns: [
                /\.map$/,
                /mix-manifest\.json$/,
                /manifest\.json$/,
                /service-worker\.js$/,
            ],
            navigateFallback: "/",
            runtimeCaching: [
                {
                    urlPattern: /^https:\/\/lib\.convoyinteractive\.com\//,
                    handler: "cacheFirst",
                },
            ],
        }),
    ],
});

Mix.js("resources/js/app.js", "public/js");

Mix.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss")("./tailwind.config.js"),
]);

if (Mix.inProduction()) {
    Mix.version();
}
