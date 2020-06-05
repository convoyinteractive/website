import { tap } from "@tobiasthaden/tap";

/**
 * First we will load 'basecamps' turbolinks to intercept clicks on '<a href>' links and preventing
 * the browser from following it. Instead, we change the browsers 'url' using the 'history API',
 * turbolinks requests the page using XMLHttpRequest – and then renders the HTML response.
 *
 * @see https://github.com/turbolinks/turbolinks
 */
import Turbolinks from "turbolinks";
Turbolinks.start();

document.addEventListener("turbolinks:load", () => {
    let title = document.title;
    window.onfocus = () => (document.title = title);
    window.onblur = () => (document.title = "(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧");
});

/**
 * Next we will initialize waypoints – unfortunately waypoints does not support modular imports,
 * so we wrapped the library in a exportable object and register an additional 'init' method.
 * The method allows us to handle any events that affect all the waypoints instances.
 */
import Waypoints from "./mixins/Waypoints";
Waypoints.init();

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

document.addEventListener(
    "turbolinks:load",
    () =>
        new Vue({
            el: "#convoy",
            data: { cursor: DefaultCursor },
        }),
);

/**
 * Next we'll load the "Navigation" component to provide some client side functions like toggling the
 * categories and make the menu keyboard accessible. The component depends on an "inline-template"
 * so the navigation is rendered on the server to be more efficent for search engine crawlers.
 */
Vue.component("nav-menu", () =>
    import(/* webpackChunkName: "js/navigation" */ "./components/Navigation"),
);

/**
 * Next we will create the "Newsletter Sign Up" component. This stateful component requests a
 * newsletter subscription by sending XMLHttpRequest using the axios library to connect to
 * our server. As well as the other components this component is loaded asynchronously.
 */
Vue.component("newsletter-sign-up", () =>
    import(/* webpackChunkName: "js/newsletter" */ "./components/Newsletter"),
);

/**
 * Now we'll require the "Draw Svg" component. This component depends on our lottie library, which
 * is a wrapper around AirBnb's web animation library with a slightly improved api and waypoints
 * support. The animated svg will be drawn as soon as the outer element reaches the viewport.
 */
Vue.component("draw-svg", () =>
    import(/* webpackChunkName: "js/draw-svg" */ "./components/DrawSvg"),
);

/**
 * Next we'll load the "Dragable" component to add touch and drag gestures. The component listens
 * for the native "mousedown", "mouseup" and "mousemove" events. Then it updates the scrollbars
 * and animates the inner view. Now we may use a mouse or trackpad like it is a touchscreen.
 */
Vue.component("dragable", () =>
    import(/* webpackChunkName: "js/dragable" */ "./components/Dragable"),
);

/**
 * Here we'll load some basic transition components. These components should be stateless
 * functional and reusable components. For defining your animations you may use "gsap".
 * Your transition component may provides handlers for any of the supported hooks:
 *
 * Eg.: "beforeEnter", "enter", "afterEnter", "enterCanceled",
 *      "beforeLeave", "leave", "afterLeave", "leaveCanceled"
 */
Vue.component("fade-in-out", () =>
    import(/* webpackChunkName: "js/transitions" */ "./components/FadeInOut"),
);
Vue.component("slide-to-left", () =>
    import(/* webpackChunkName: "js/transitions" */ "./components/SlideToLeft"),
);

/**
 * Now, let's have some fun! Here we load our "Snake Game" component. The game is
 * a replication of an application which came with the most popular cell phones
 * from the late 90's the Nokia 3210 and 8210. But ours supports colors. (ツ)
 */
Vue.component("snake", () =>
    import(/* webpackChunkName: "js/snake" */ "./components/Snake"),
);
