import gsap from "gsap";

export default {
    functional: true,
    render: (createElement, context) => {
        let on = {
            enter(element, done) {
                gsap.fromTo(
                    element,
                    {
                        x: "100%",
                    },
                    {
                        x: 0,
                        duration: 0.25,
                        onComplete: () => done(),
                    },
                );
            },

            leave(element, done) {
                gsap.fromTo(
                    element,
                    {
                        x: 0,
                    },
                    {
                        x: "100%",
                        duration: 0.25,
                        onComplete: () => done(),
                    },
                );
            },
        };

        return createElement("transition", { on }, context.children);
    },
};
