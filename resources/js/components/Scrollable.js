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

    data() {
        return {
            tween: null,
        };
    },

    mounted() {
        gsap.registerPlugin(ScrollTrigger);

        var _vm = this;

        let update = function() {
            tap(_vm.tween, tween => {
                let width = _vm.calculateWidth();
                tween.vars.x = `-${width}px`;
            }).invalidate();

            ScrollTrigger.refresh();
        };

        let initialize = function() {
            let width = _vm.calculateWidth();

            _vm.tween = gsap.to(_vm.$refs.element.children, {
                x: `-${width}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: _vm.$refs.element.parentElement,
                    pin: _vm.$refs.element.parentElement,
                    scrub: true,
                },
            });
        };

        let teardown = function() {
            document.removeEventListener("assets:load", initialize);
            document.removeEventListener("lottie:ready", update);
            window.removeEventListener("resize", update);
        };

        document.addEventListener("turbolinks:before-render", teardown);
        document.addEventListener("assets:load", initialize);
        document.addEventListener("lottie:ready", update);
        window.addEventListener("resize", update);
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
