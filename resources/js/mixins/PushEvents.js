export default {
    bind(element, binding, vnode) {
        const push = function(event, element) {
            Array.from(element.children).forEach(child => {
                child.dispatchEvent(event);
                push(event, child);
            });
        };

        binding.value.forEach(event =>
            element.addEventListener(event, () =>
                push(new Event(event), element),
            ),
        );
    },
};
