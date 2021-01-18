import { tap } from "@tobiasthaden/tap";
import { DefaultCursor } from "./Cursor";

const arrow = `
<svg class="w-4 h-4 block text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
    <path fill="currentColor" fill-rule="nonzero" d="M11.3839868 5l2.7668674 3.31763026-2.7666199 3.32255424-.7684686-.6398874L12.43 8.82 1 8.82024078v-1L12.434 7.82l-1.8179868-2.17951844L11.3839868 5z"/>
</svg>
`;

const createIcon = function () {
    return tap(document.createElement('span'), icon => {
        icon.classList.add('w-15', 'h-15', 'flex', 'justify-center', 'items-center', 'rounded-full', 'flex-none');
        icon.innerHTML = arrow;
    });
}

export default {
    bind(element, binding, vnode) {
        element.onEnter = event => {
            vnode.context.$root.cursor = Cursors.create(binding.value, element);
        };

        let icon = createIcon();
        icon.classList.add('bg-black', 'text-white', 'mr-4');

        element.appendChild(icon);

        element.onEnter = event => {
            vnode.context.$root.cursor = {
                size: 62,
                label: arrow,
                position: tap(icon.getBoundingClientRect(), position => {
                    position.x = position.x + 30;
                    position.y = position.y + 30;
                })
            };
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
