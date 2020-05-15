/**
 * This is a simple wrapper around Airbnb's lottie to improve the overall api.
 * The library also extends the current functionality by supporting waypoints.
 *
 * @see https://github.com/airbnb/lottie-web
 * @see https://github.com/imakewebthings/waypoints
 */

import Airbnb from "lottie-web/build/player/lottie_light";
import Waypoints from "../mixins/Waypoints";

export default class Lottie {
    constructor(options) {
        options.autoplay = false;

        this.animation = Airbnb.loadAnimation(options);

        this.handlers = {
            inview: animation => this.handleInView(animation),
        };
    }

    play(option) {
        if (!option) {
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
}
