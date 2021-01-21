import { tap } from "@tobiasthaden/tap"
import Waypoints from "../mixins/Waypoints";
import gsap, { Power2 } from "gsap";

const createCurtain = function (css, theme) {
    return tap(document.createElement("div"), curtain => {
        curtain.classList.add("absolute", "inset-0", css);

        if (theme) {
            curtain.style.backgroundColor = theme.background;
        }
    });
}

export default {
    inserted(element, bindings) {
        let complete = false;
        let theme = element.dataset.theme ? JSON.parse(element.dataset.theme) : null;

        element.classList.add("relative", "overflow-hidden");
        let curtain = createCurtain(bindings.value, theme);
        element.append(curtain);

        let tl = gsap
            .timeline({
                paused: true,
                onComplete: () => {
                    complete = true;
                    curtain.remove();
                },
            })
            .fromTo(
                curtain,
                {
                    y: "100%",
                },
                {
                    y: "-100%",
                    duration: 0.5,
                    ease: Power2.easeInOut,
                },
                "0",
            )
            .fromTo(
                element.children[0],
                {
                    visibility: "hidden",
                    y: "20%",
                },
                {
                    visibility: "visible",
                    y: "0%",
                    duration: 0.25,
                    ease: Power2.easeOut,
                },
                ".25",
            );

        tl.duration(1.5);

        new Waypoints.Waypoint({
            element: element,
            handler: direction => {
                if (!complete) {
                    tl.play();
                }
            },
            offset: () => Waypoint.viewportHeight() * 0.9,
        });
    },
};
