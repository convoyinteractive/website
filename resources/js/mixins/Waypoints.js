import "waypoints/lib/noframework.waypoints.js";
import { ScrollTrigger } from "gsap/all";

export default {
    Waypoint: Waypoint,

    init: function() {
        document.addEventListener("turbolinks:load", Waypoint.disableAll);

        window.addEventListener("resize", Waypoint.refreshAll);
        ScrollTrigger.addEventListener("refreshInit", Waypoint.refreshAll);

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

            document.addEventListener("lottie:ready", callback);
        }
    },
};
