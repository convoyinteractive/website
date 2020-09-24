import Waypoints from "./Waypoints";

export default {
    inserted(element) {
        let theme = JSON.parse(document.body.getAttribute("theme"));

        let addTheme = () => {
            document.body.style.color = theme.text;
            document.body.style.background = theme.background;
        };

        let removeTheme = () => {
            document.body.style.color = null;
            document.body.style.background = null;
        };

        new Waypoints.Waypoint({
            element: element,
            handler: direction =>
                direction === "down" ? addTheme() : removeTheme(),
            offset: function() {
                return this.context.innerHeight() / 2;
            },
        });

        new Waypoints.Waypoint({
            element: element,
            handler: direction =>
                direction === "up" ? addTheme() : removeTheme(),
            offset: function() {
                return -(
                    this.adapter.outerHeight() -
                    this.context.innerHeight() / 2
                );
            },
        });
    },
};
