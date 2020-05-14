export const DefaultCursor = null;

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
