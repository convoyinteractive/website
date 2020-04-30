import "waypoints/lib/noframework.waypoints.js";

export default {
    Waypoint: Waypoint,

    init: function() {
        window.addEventListener("resize", Waypoint.refreshAll);
        document.addEventListener("turbolinks:load", Waypoint.disableAll);

        assetsLoaded(Waypoint.refreshAll);

        function assetsLoaded(callback) {
            let assets = [];

            document.addEventListener("turbolinks:load", () => {
                ["img", "picture"].forEach(selector => {
                    let elements = Array.from(
                        document.querySelectorAll(selector),
                    );
                    assets.push(...elements);
                });

                assets.forEach(element =>
                    element.addEventListener("load", callback),
                );
            });
        }
    },
};
