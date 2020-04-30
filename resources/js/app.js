import { tap } from "@tobiasthaden/tap";

/**
 * First we'll register our ready helper. The given callback receives the element
 * as its first argument and will be handled as soon as the load event fires.
 */
const ready = (element, callback) => {
    document.addEventListener("turbolinks:load", event =>
        callback(element, event),
    );
};

/**
 * Next we will load 'basecamps' turbolinks to intercept clicks on '<a href>' links and preventing
 * the browser from following it. Instead, we change the browsers 'url' using the 'history API',
 * turbolinks requests the page using XMLHttpRequest – and then renders the HTML response.
 *
 * @see https://github.com/turbolinks/turbolinks
 */
import Turbolinks from "turbolinks";
Turbolinks.start();

/**
 * Now we'll load vue to sprinkle our frontend with reactivity. Caused by the caching from turbolinks
 * we have to use the turbovue mixin to keep reactivity. Turbovue destroys our current vue instance
 * before it will mount - nevertheless the original cached html from turbolinks will be restored.
 *
 * @see https://github.com/vuejs/vue
 */
import Vue from "vue";
import Turbovue from "./mixins/Turbovue";
import ClickAway from "./mixins/ClickAway";

Vue.mixin(Turbovue);
Vue.directive("click-away", ClickAway);
ready("#convoy", el => new Vue({ el }));

// Next we'll register our vue components - these components will be asynchronously loaded when needed.
// prettier-ignore
{
    Vue.component("nav-menu", () => import( /* webpackChunkName: "js/navigation" */ "./components/Navigation"));

    // Transitions
    Vue.component("fade-in-out", () => import( /* webpackChunkName: "js/fadeinout" */ "./components/FadeInOut"));
    Vue.component("slide-from-right", () => import( /* webpackChunkName: "js/slidefromright" */ "./components/SlideFromRight"));
}

/**
 * Next we will load the "dragable" library and add touch and drag gestures to scrollable
 * elements. This library listens for the "mousedown", "mouseup" and "mousemove" events
 * and updates the scrollbars. Now we may use a mouse or trackpad like a touchscreen.
 */
import Dragable from "./Dragable";
ready("[dragable]", elements =>
    Array.from(document.querySelectorAll(elements)).forEach(element =>
        tap(new Dragable(element), dragable => dragable.mount()),
    ),
);

/**
 * Next we will initialize waypoints – unfortunately waypoints does not support modular imports,
 * so we wrapped the library in a exportable object and register an additional 'init' method.
 * The method allows us to handle any events that affect all the waypoints instances.
 */

import Waypoints from "./mixins/Waypoints";
Waypoints.init();

/**
 * Let's load our "day 'n' night" library. The library accepts a document selector and provides
 * two methods "sunrise" and "sunset" that keep track of our scroll position. On sunrise the
 * daynight-attribute values are added to the class-attribute, on sunset they get removed.
 */
import DayNight from "./DayNight";
ready(".daynight", elements =>
    Array.from(document.querySelectorAll(elements)).forEach(element =>
        tap(new DayNight(element), daynight => {
            daynight
                .sunrise({ offset: "50%", direction: "down" })
                .sunset({ offset: "50%", direction: "up" })
                .sunrise({ offset: "-50%", direction: "up" })
                .sunset({ offset: "-50%", direction: "down" });
        }),
    ),
);

/**
 * Vivus
 */
import Vivus from "vivus";
ready(".vivus", elements =>
    Array.from(document.querySelectorAll(elements)).forEach(
        element =>
            new Vivus(element, {
                start: "inViewport",
                type: "delayed",
                duration: 150,
            }),
    ),
);
