import gsap from "gsap";
import { ScrollTrigger } from "gsap/all";

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
        var id;

        var _vm = this;

        let initialize = function() {
            if (id) {
                ScrollTrigger.getById(id).kill();
            }

            let width = _vm.calculateWidth();

            id = Math.random()
                .toString(36)
                .substr(2, 10);

            gsap.to(_vm.$refs.element.children, {
                x: `-${width}px`,
                ease: "none",
                scrollTrigger: {
                    id: id,
                    trigger: _vm.$refs.element.parentElement,
                    pin: _vm.$refs.element.parentElement,
                    pinSpacing: "margin",
                    scrub: true,
                },
            });
        };

        initialize();
        document.addEventListener("lottie:ready", initialize);
        window.addEventListener("resize", initialize);
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
