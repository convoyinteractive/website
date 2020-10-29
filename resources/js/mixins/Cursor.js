import { tap } from "@tobiasthaden/tap";

export const DefaultCursor = {
    label: '',
    size: 16,
};

export const PlayerCursor = {
    handle(element) {
        this.label = element.paused ? 'Play' : 'Pause';
    },
    size: 60,
};

export const Cursors = {
    default: DefaultCursor,
    player: PlayerCursor,

    create(cursor, element) {
        return tap(this[cursor], cursor => cursor.handle(element));
    },
}

export const CursorComponent = {
    render(h) {
        return h('div', {
            class: 'fixed rounded-full bg-green pointer-events-none z-50 font-sans text-sm flex items-center justify-center transition-all duration-100',
            style: this.style,
        }, this.label);
    },

    data() {
        return {
            label: '',
            position: {
                x: -100,
                y: -100,
            }
        }
    },

    mounted() {
        window.addEventListener('mousemove', event => {
            this.position = {
                x: event.clientX,
                y: event.clientY,
            }
        });
    },

    computed: {
        style() {
            return {
                top: this.position.y - this.$root.cursor.size / 2 + 'px',
                left: this.position.x - this.$root.cursor.size / 2 + 'px',
                width: this.$root.cursor.size + 'px',
                height: this.$root.cursor.size + 'px',
            };
        },
    },
    watch: {
        '$root.cursor.label': function (label) {
            this.label = label;
        }
    }
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
