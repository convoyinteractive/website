import gsap from "gsap";

export default {
    functional: true,
    render: (createElement, context) => {
        let on = {
            enter(element, done) {
                gsap.fromTo(
                    element,
                    {
                        opacity: 0,
                    },
                    {
                        opacity: 1,
                        duration: 0.25,
                        onComplete: () => done(),
                    },
                );
            },

            leave(element, done) {
                gsap.fromTo(
                    element,
                    {
                        opacity: 1,
                    },
                    {
                        opacity: 0,
                        duration: 0.25,
                        onComplete: () => done(),
                    },
                );
            },
        };

        return createElement("transition", { on }, context.children);
    },
};
