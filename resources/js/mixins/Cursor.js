export const DefaultCursor = {
    label: function () {
        return;
    },
    size: 20,
};

export const CursorComponent = {
    render(h) {
        return h('div', {
            class: 'fixed rounded-full bg-green pointer-events-none z-50',
            style: this.style,
        }, this.label);
    },

    data() {
        return {
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
        label() {
            return this.$root.cursor.label();
        }
    }
}

export default {
    bind(element, binding, vnode) {
        element.onEnter = event => {
            vnode.context.cursor = binding.value;
        };

        element.onLeave = event => {
            vnode.context.cursor = DefaultCursor;
        };

        element.addEventListener("mouseenter", element.onEnter);
        element.addEventListener("mouseleave", element.onLeave);
    },

    unbind(element) {
        element.removeEventListener("mouseenter", element.onEnter);
        element.removeEventListener("mouseleave", element.onLeave);
    },
};
