import Waypoints from "./mixins/Waypoints";

export default class DayNight {
    constructor(element) {
        this.element = element;
        this.colors = document.body.getAttribute("daynight").split(" ");
    }

    sunrise({ direction, offset }) {
        new Waypoints.Waypoint({
            element: this.element,
            handler: way => {
                if (way === direction) {
                    this._day();
                }
            },
            offset: offset,
        });

        return this;
    }

    sunset({ direction, offset }) {
        new Waypoints.Waypoint({
            element: this.element,
            handler: way => {
                if (way === direction) {
                    this._night();
                }
            },
            offset: offset,
        });

        return this;
    }

    _day() {
        this.colors.forEach(item => document.body.classList.add(item));
    }

    _night() {
        this.colors.forEach(item => document.body.classList.remove(item));
    }
}
