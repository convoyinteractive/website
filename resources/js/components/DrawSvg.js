/**
 * Here we will load our animation library that uses airbnb's lottie-web under the hood. We
 * provide a slightly improved api and extend the functionality by supporting waypoints.
 * All elements with a "lottie-payload" attribute will be automatically regsitered.
 */
import Lottie from "../Lottie";

export default {
    render: function(createElement) {
        return createElement("div", {
            ref: "container",
        });
    },

    props: ["from"],

    mounted() {
        new Lottie({
            container: this.$refs.container,
            path: this.from,
        }).play("inview");
    },
};
