import { tap } from "@tobiasthaden/tap";
import { assetsLoaded } from "./helpers";

/**
 * First we'll require cookieguard to handle our analytics and tracking services. The cookieguard
 * library loads all the services to which the user has consented. That selection will be saved
 * to the browsers 'localeStorage'. Cookieguard keeps track if the consent is still active.
 *
 * @see https://github.com/tobiasthaden/cookieguard
 */
import Cookieguard, { GoogleAnalytics } from "cookieguard"

window.cookieguard = new Cookieguard({
    ga: new GoogleAnalytics("UA-41461831-1"),
});

/**
 * Next we will load 'basecamps' turbolinks to intercept clicks on '<a href>' links and preventing
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
    window.onblur = () => (document.title = "Baby, you can drive my car.");

    assetsLoaded(["img"])
        .then(loaded => document.dispatchEvent(new CustomEvent("assets:load")))
        .catch(failed =>
            document.dispatchEvent(new CustomEvent("assets:load")),
        );
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
Vue.mixin(Turbovue);

/**
 * Next we'll register a handfull directives. These reusable directives can be used within our
 * whole application to add client rendered behaviour or register additional event listeners.
 * Note: all event listeners and modifications are undone when the directive gets unbind.
 */
import Button from "./mixins/Button";
Vue.directive("button", Button);

import ClickAway from "./mixins/ClickAway";
Vue.directive("click-away", ClickAway);

import PushEvents from "./mixins/PushEvents";
Vue.directive("push-events", PushEvents);

import Theme from "./mixins/Theme";
Vue.directive("theme", Theme);

import FadeIn from "./transitions/FadeIn";
Vue.directive("fade-in", FadeIn);

import Curtain from "./transitions/Curtain";
Vue.directive("curtain", Curtain);

import Scale from "./transitions/Scale";
Vue.directive("scale", Scale);

/**
 * Here we register all the cursor related data, a directive and a component. The cursor data
 * is stored on our root application instance and can be updated from the cursor directive
 * The cursor component simply renders the cursor data and updates the cursor position.
 */
import Cursor, { DefaultCursor, CursorComponent } from "./mixins/Cursor";
Vue.directive("cursor", Cursor);
Vue.component("custom-cursor", CursorComponent);

document.addEventListener(
    "turbolinks:load",
    () =>
        new Vue({
            el: "#convoy",
            data: { cursor: DefaultCursor },
        }),
);

/**
 * Next we'll load the "Cookie Consent" component. This component acts as an interface for our
 * cookieguard instance. It alerts the user that the app wants to load third-party-services
 * and allows to opt-in in these services or to deny the use of third-party services.
 */
Vue.component("cookie-consent", () =>
    import(/* webpackChunkName: "js/consent" */ "./components/CookieConsent"),
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
 * Next we'll load the "Scrollable" component. This component animates its content
 * by scrolling. The single components root container pins to the viewports top.
 * Therefore it's best practice that the container fits the viewports height.
 */
Vue.component("scrollable", () =>
    import(/* webpackChunkName: "js/scrollable" */ "./components/Scrollable"),
);

/**
 * Next we'll load our device components. These functional components accepting
 * a "screen" as its default slot – but do not handle any internal state. The
 * devices are single path Svg's that should inherit ist parents text color.
 */
Vue.component("phone", () =>
    import(/* webpackChunkName: "js/devices" */ "./components/Phone"),
);

/**
 * Next we will load our video player component. This component wraps the native
 * HTMLMediaElement api in a more expressive data binding object. The provided
 * methods as well as the data object makes creating media controls a breeze.
 */
Vue.component("video-player", () =>
    import(/* webpackChunkName: "js/media" */ "./components/VideoPlayer"),
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
 * Here we will load our fullscreen components. This component toggles the fullscreen state by
 * mapping the native fullscreen API, but also handles the "fullscreenchange" event without
 * further configuration. Nevertheless, hooks for additional events are also supported.
 */
Vue.component("fullscreen", () =>
    import(/* webpackChunkName: "js/fullscreen" */ "./components/Fullscreen"),
);

/**
 * Next we'll load the likes component. This component uses the "axios" library to fetch the
 * current likes count and syncs the updated likes with our JSON API.
 *
 * Eg.: GET   api/likes/{resource}
 *      POST  api/likes {count, resource}
 */
Vue.component("likes", () =>
    import(/* webpackChunkName: "js/likes" */ "./components/Likes"),
);

/**
 * Now, let's have some fun! Here we load our "Snake Game" component. The game is
 * a replication of an application which came with the most popular cell phones
 * from the late 90's the Nokia 3210 and 8210. But ours supports colors. (ツ)
 */
Vue.component("snake", () =>
    import(/* webpackChunkName: "js/snake" */ "./components/Snake"),
);
