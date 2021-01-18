import { tap } from "@tobiasthaden/tap";

export const DefaultCursor = {
    label: "",
    size: 16,
};

export const PlayerCursor = {
    handle(element, binding) {
        this.label = element.paused ? "Play" : "Pause";
    },
    size: 180,
};

export const TextCursor = {
    handle(element, binding) {
        this.label = binding.label;
        this.size = binding.size || 180;
    },
};

export const Cursors = {
    default: DefaultCursor,
    player: PlayerCursor,
    text: TextCursor,

    create(binding, element) {
        return tap(this[binding.type], cursor =>
            cursor.handle(element, binding),
        );
    },
};

export const CursorComponent = {
    render(h) {
        return h(
            "div",
            {
                class:
                    "p-2 fixed rounded-full bg-green pointer-events-none z-50 font-sans text-sm text-center flex items-center justify-center transition-all duration-100 leading-none",
                style: this.style,
                domProps: {
                    innerHTML: this.label
                }
            }
        );
    },

    data() {
        return {
            label: "",
            position: {
                x: -100,
                y: -100,
            },
        };
    },

    mounted() {
        window.addEventListener("mousemove", event => {
            this.position = {
                x: event.clientX,
                y: event.clientY,
            };
        });
    },

    computed: {
        y() {
            if (this.$root.cursor.position) {
                return this.$root.cursor.position.y;
            }

            return this.position.y;
        },
        x() {
            if (this.$root.cursor.position) {
                return this.$root.cursor.position.x;
            }

            return this.position.x;
        },
        size() {
            if (this.$root.cursor.size) {
                return this.$root.cursor.size;
            }

            return 0;
        },
        style() {
            return {
                top: this.y - this.size / 2 + "px",
                left: this.x - this.size / 2 + "px",
                width: this.size + "px",
                height: this.size + "px",
                transition: "all 150ms linear",
            };
        },
    },
    watch: {
        "$root.cursor.label": function(label) {
            this.label = label;
        },
    },
};

export default {
    bind(element, binding, vnode) {
        element.onEnter = event => {
            vnode.context.$root.cursor = Cursors.create(binding.value, element);
        };

        element.onLeave = event => {
            vnode.context.$root.cursor = DefaultCursor;
        };

        element.addEventListener("mouseenter", element.onEnter);
        element.addEventListener("mouseleave", element.onLeave);
    },

    unbind(element) {
        element.removeEventListener("mouseenter", element.onEnter);
        element.removeEventListener("mouseleave", element.onLeave);
    },
};
