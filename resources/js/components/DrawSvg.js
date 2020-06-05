/**
 * Here we will load our animation library that uses airbnb's lottie-web under the hood.
 * Nevertheless, we provide an improved api and extend the functionality by supporting
 * waypoints. The component requires a configuration file via the "from" property.
 */
import Lottie from "../Lottie";

export default {
    render: h => h("div", { ref: "container" }),

    props: ["from"],

    mounted() {
        let animation = new Lottie({
            container: this.$refs.container,
            path: this.from,
        });

        this.$nextTick(() => animation.play("inview"));
    },
};
