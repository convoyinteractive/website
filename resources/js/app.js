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

// Register web components.
import Navigation from "./components/Navigation";
import SlideFromRight from "./components/SlideFromRight";
Vue.component("nav-menu", Navigation);
Vue.component("off-canvas", SlideFromRight);
