import Waypoints from "../mixins/Waypoints";
import gsap, { Power2 } from "gsap";

export default {
    inserted(element) {
        gsap.set(element, { y: 50, opacity: 0 });
        new Waypoints.Waypoint({
            element: element,
            handler: () => {
                gsap.to(element, {
                    y: 0,
                    opacity: 1,
                    duration: 0.5,
                });
            },
            offset: function() {
                return Waypoint.viewportHeight() * 0.9;
            },
        });
    },
};
