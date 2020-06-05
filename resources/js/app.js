import { tap } from "@tobiasthaden/tap";

/**
 * First we'll register our ready helper. The given callback receives the element
 * as its first argument and will be handled as soon as the load event fires.
 */
const ready = (element, callback) => {
    if (!callback) {
        return document.addEventListener("turbolinks:load", event =>
            element(event),
        );
    }
    return document.addEventListener("turbolinks:load", event =>
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
import Cursor, { DefaultCursor } from "./mixins/Cursor";

Vue.mixin(Turbovue);
Vue.directive("cursor", Cursor);
Vue.directive("click-away", ClickAway);

ready(
    () =>
        new Vue({
            el: "#convoy",
            data: { cursor: DefaultCursor },
        }),
);

Vue.component("nav-menu", () =>
    import(/* webpackChunkName: "js/navigation" */ "./components/Navigation"),
);
Vue.component("newsletter-sign-up", () =>
    import(/* webpackChunkName: "js/newsletter" */ "./components/Newsletter"),
);
Vue.component("fade-in-out", () =>
    import(/* webpackChunkName: "js/transitions" */ "./components/FadeInOut"),
);
Vue.component("slide-to-left", () =>
    import(/* webpackChunkName: "js/transitions" */ "./components/SlideToLeft"),
);
Vue.component("snake", () =>
    import(/* webpackChunkName: "js/snake" */ "./components/Snake"),
);
Vue.component("draw-svg", () =>
    import(/* webpackChunkName: "js/draw-svg" */ "./components/DrawSvg"),
);

/**
 * Next we'll load the "dragable" component to add touch and drag gestures. The component listens
 * for the native "mousedown", "mouseup" and "mousemove" events. Then it updates the scrollbars
 * and animates the inner view. Now we may use a mouse or trackpad like it is a touchscreen.
 */
Vue.component("dragable", () =>
    import(/* webpackChunkName: "js/dragable" */ "./components/Dragable"),
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
            let offset = -element.clientHeight + window.innerHeight / 2;
            daynight
                .sunrise({ offset: "50%", direction: "down" })
                .sunset({ offset: "50%", direction: "up" })
                .sunrise({ offset: offset, direction: "up" })
                .sunset({ offset: offset, direction: "down" });
        }),
    ),
);


//

ready("title", title => {
    title = document.title;
    window.onfocus = () => (document.title = title);
    window.onblur = () => (document.title = "(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧");
});
