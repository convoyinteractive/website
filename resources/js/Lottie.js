/**
 * This is a simple wrapper around Airbnb's lottie to improve the overall api.
 * The library also extends the current functionality by supporting waypoints.
 *
 * @see https://github.com/airbnb/lottie-web
 * @see https://github.com/imakewebthings/waypoints
 */

import Airbnb from "lottie-web/build/player/lottie_light";
import Waypoints from "./mixins/Waypoints";

export default class Lottie {
    constructor(options) {
        options.autoplay = false;
        options.loop = false;

        this.animation = Airbnb.loadAnimation(options);

        this.animation.addEventListener("DOMLoaded", function() {
            document.dispatchEvent(new CustomEvent("lottie:ready"));
        });

        this.handlers = {
            inview: animation => this.handleInView(animation),
            onscroll: animation => this.handleOnScroll(animation),
        };
    }

    play(option) {
        if (!this.handlers.hasOwnProperty(option)) {
            return this.animation.play();
        }

        this.handlers[option](this.animation);
    }

    handleInView(animation) {
        new Waypoints.Waypoint({
            element: animation.wrapper,
            handler: () => {
                animation.play();
            },
            offset: "50%",
        });
    }

    handleOnScroll(animation) {
        animation.addEventListener("DOMLoaded", e => {
            new Waypoints.Waypoint({
                element: animation.wrapper,
                handler: function() {
                    let offset = this.triggerPoint;

                    let animate = function() {
                        let distance = Math.round(
                            (animation.totalFrames /
                                animation.wrapper.clientHeight) *
                                (window.pageYOffset - offset),
                        );

                        let frame = Math.min(
                            animation.totalFrames,
                            Math.max(1, distance),
                        );

                        animation.goToAndStop(frame, true);
                        window.requestAnimationFrame(animate);
                    };

                    animate();
                },
                offset: "50%",
            });
        });
    }
}
