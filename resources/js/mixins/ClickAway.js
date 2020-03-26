export default {
    bind(element, binding, vnode) {
        element.clickedAway = event => {
            if (!(element == event.target || element.contains(event.target))) {
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener("click", element.clickedAway);
    },

    unbind(element) {
        document.body.removeEventListener("click", element.clickedAway);
    },
};
