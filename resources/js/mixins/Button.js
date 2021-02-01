import { tap } from "@tobiasthaden/tap";
import { DefaultCursor } from "./Cursor";

const arrow = `
<svg class="w-4 h-4 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
    <path fill="currentColor" fill-rule="nonzero" d="M11.3839868 5l2.7668674 3.31763026-2.7666199 3.32255424-.7684686-.6398874L12.43 8.82 1 8.82024078v-1L12.434 7.82l-1.8179868-2.17951844L11.3839868 5z"/>
</svg>
`;

const link = `
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 block">
    <path fill="currentColor" d="M17.5029262 20.010091c-1.0416038.0073405-2.04338088-.399886-2.78436982-1.1319578l.56592882-.5659288c1.2150182 1.2124683 3.1822487 1.2124683 4.3972669 0l5.2008859-5.20088587c1.2124683-1.21501818 1.2124683-3.18224874 0-4.39726692l-.9281233-1.0073533c-1.2150182-1.21246831-3.1822487-1.21246831-4.3972669 0l-3.67287805 3.66721875-.56592882-.56592882L18.991319 7.14076949c1.5424573-1.52102599 4.0206229-1.52102599 5.5630803 0l.9337825.95076042c1.521026 1.54245734 1.521026 4.02062294 0 5.56308029l-5.2008858 5.1895673c-.7357713.7439915-1.7380056 1.1636262-2.7843698 1.1659135h0z"/>
    <path fill="currentColor" d="M10.89287756 26.6200395c-1.04196396.0093234-2.04443646-.3981858-2.78436979-1.1318577l-.96773828-.9847161c-1.52102599-1.5424574-1.52102599-4.020623 0-5.5630803l5.20088585-5.1895673c1.54245735-1.52102599 4.02062296-1.52102599 5.56308026 0l.9564197.95076042-.5659288.56592882-.9677383-.95076042c-1.2150181-1.21246831-3.18224871-1.21246831-4.39726689 0L7.72933546 19.5176328c-1.21246831 1.2150181-1.21246831 3.1822487 0 4.3972669l.94510113.9677383c.58280275.5836997 1.37379144.9116942 2.19863346.9116942.82484203 0 1.61583072-.3279945 2.19863347-.9116942l3.46348438-3.4634844.5659288.5659288-3.42386935 3.4804623c-.73656417.7414356-1.73926393 1.1571891-2.78436979 1.1544948z"/>
</svg>
`;

export default {
    bind(element, binding, vnode) {
        element.onEnter = event => {
            vnode.context.$root.cursor = Cursors.create(binding.value, element);
        };

        let symbol = binding.value ? link : arrow;
        let colors = Array.from(element.classList).includes('text-white') ? ['text-black', 'bg-white'] : ['bg-black', 'text-white'];

        let icon = tap(document.createElement('span'), icon => {
            icon.classList.add('w-10', 'h-10', 'lg:w-15', 'lg:h-15', 'mr-4', 'flex', 'justify-center', 'items-center', 'rounded-full', 'flex-none', ...colors);
            icon.innerHTML = symbol;
        })
        element.appendChild(icon);

        element.onEnter = event => {
            let bounding = icon.getBoundingClientRect();

            vnode.context.$root.cursor = {
                size: bounding.width + 2,
                label: symbol,
                position: {
                    x: bounding.x + bounding.width / 2,
                    y: bounding.y + bounding.height / 2,
                }
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
