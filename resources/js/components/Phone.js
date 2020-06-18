export default {
    functional: true,
    render: function(h, context) {
        const screen = h(
            "div",
            {
                style: {
                    position: "relative",
                    overflow: "hidden",
                    width: "100%",
                    borderRadius: "1.5vw",
                },
            },
            context.children,
        );

        const phone = h("svg", {
            attrs: {
                viewBox: "0 0 100 220",
                preserveAspectRatio: "none",
            },
            style: {
                position: "absolute",
                inset: 0,
                width: "100%",
                height: "100%",
                filter: "drop-shadow(0 10px 20px rgba(0,0,0,0.15))",
            },
            domProps: {
                innerHTML: `<rect fill="currentColor" x="0" y="0" width="100" height="220" rx="15"></rect>`,
            },
        });

        return h(
            "div",
            {
                style: {
                    position: "relative",
                    width: "100%",
                    maxWidth: "15vw",
                    marginLeft: "auto",
                    marginRight: "auto",
                    padding: "1.5%",
                },
            },
            [phone, screen],
        );
    },
};
