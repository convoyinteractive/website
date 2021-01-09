import "waypoints/lib/noframework.waypoints.js";
import { ScrollTrigger } from "gsap/all";

export default {
    Waypoint: Waypoint,

    init: function() {
        document.addEventListener("turbolinks:load", Waypoint.disableAll);

        window.addEventListener("resize", Waypoint.refreshAll);
        document.addEventListener("lottie:ready", Waypoint.refreshAll);
        document.addEventListener("assets:load", Waypoint.refreshAll);
        ScrollTrigger.addEventListener("refreshInit", Waypoint.refreshAll);
    },
};
