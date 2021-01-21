import Waypoints from "../mixins/Waypoints";
import gsap, { Power2, Linear } from "gsap";

export default {
    bind(element, binding, vnode) {
        let target = binding.value.children ? element.children : element;

        element.zoomIn = event => {
            gsap.killTweensOf(target, "scale");
            gsap.to(target, {
                scale: 1.03,
                duration: 1.4,
                ease: Power2.easeOut,
            });
        };

        element.zoomOut = event => {
            gsap.killTweensOf(target, "scale");
            gsap.to(target, {
                scale: 1,
                duration: 0.3,
                ease: Power2.easeInOut,
            });
        };

        element.addEventListener("mouseenter", element.zoomIn);
        element.addEventListener("mouseleave", element.zoomOut);
    },

    unbind(element) {
        element.removeEventListener("mouseenter", element.zoomIn);
        element.removeEventListener("mouseleave", element.zoomOut);
    },
};
