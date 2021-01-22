import { tap } from "@tobiasthaden/tap";
import gsap, { ScrollTrigger } from "gsap/all";

export default {
    render: function(h) {
        return h(
            "div",
            {
                ref: "element",
            },
            this.$slots.default,
        );
    },

    mounted() {
        gsap.registerPlugin(ScrollTrigger);

        let tween, timeout;
        let width = this.calculateWidth();

        let items = this.$refs.element.children;
        let stage = this.$refs.element.parentElement;

        let initialize = function() {
            tween = gsap.to(items, {
                x: `-${width}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: stage,
                    pin: stage,
                    scrub: true,
                },
            });
        };

        let destroy = function() {
            if (tween) {
                tween.scrollTrigger.kill();
                tween.kill();
            }
        };

        window.addEventListener("resize", () => {
            window.clearTimeout(timeout);

            timeout = window.setTimeout(() => {
                let newWidth = this.calculateWidth();

                if (width !== newWidth) {
                    width = newWidth;
                    destroy();
                    initialize();
                }
            }, 500);
        });

        let teardown = function() {
            document.removeEventListener("assets:load", update);
            document.removeEventListener("lottie:ready", update);
        };

        document.addEventListener("turbolinks:before-render", teardown);
        document.addEventListener("assets:load", ScrollTrigger.refresh);
        document.addEventListener("lottie:ready", ScrollTrigger.refresh);

        initialize();
    },

    methods: {
        calculateWidth() {
            let parsePixel = function(value) {
                return parseFloat(value);
            };

            let width = -this.$refs.element.offsetWidth;

            Array.from(this.$refs.element.children).forEach(section => {
                let style = window.getComputedStyle(section);
                width +=
                    parsePixel(style.marginLeft) +
                    parsePixel(style.marginRight) +
                    section.offsetWidth;
            });

            return width;
        },
    },
};
