module.exports = {

    /* Background  */

    backgroundSize: {},

    backgroundColor: theme => theme('colors'),

    backgroundPosition: theme => theme('positions'),

    /* Border */

    borderRadius: {},

    borderWidth: {},

    borderColor: theme => theme('colors'),

    /* Shadow */

    boxShadow: {},

    /* Typogtraphy */

    fontFamily: {
        body: ['Roboto Slab', 'sans-serif'],
        serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
        mono: ['Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
    },

    textColor: theme => theme('colors'),

    fontSize: theme => theme('spacing'),

    lineHeight: theme => theme('spacing'),

    /* Spacing */

    padding: theme => theme('spacing'),

    margin: (theme, { negative }) => ({
        auto: 'auto',
        ...theme('spacing'),
        ...negative(theme('spacing')),
    }),

    /* Opacity */

    opacity: {},

    /* Size */

    height: theme => ({
        ...theme('spacing'),
        ...theme('sizes'),
        screen: '100vh',
    }),

    width: theme => ({
        ...theme('spacing'),
        ...theme('sizes'),
        screen: '100vw',
    }),

    maxWidth: theme => ({
        none: 'none',
        ...theme('spacing'),
        ...theme('sizes'),
    }),

    /* Transform */

    scale: {},

    rotate: {},

    skew: {},

    translate: (theme, { negative }) => ({
        ...theme('spacing'),
        ...negative(theme('spacing')),
        '-full': '-100%',
        '-1/2': '-50%',
        '1/2': '50%',
        full: '100%',
    }),

    transformOrigin: theme => theme('positions'),

    /* Position */

    zIndex: {
        auto: 'auto',
        '0': '0',
        '10': '10',
        '20': '20',
        '30': '30',
        '40': '40',
        '50': '50',
    },

    /* Transition */

    transitionProperty: {
        none: 'none',
        all: 'all',
        opacity: 'opacity',
        shadow: 'box-shadow',
        transform: 'transform',
    },

    transitionTimingFunction: {
        linear: 'linear',
        in: 'cubic-bezier(0.4, 0, 1, 1)',
        out: 'cubic-bezier(0, 0, 0.2, 1)',
        'in-out': 'cubic-bezier(0.4, 0, 0.2, 1)',
    },

    transitionDuration: {
        '200': '200ms',
        '300': '300ms',
        '500': '500ms',
    },
}
