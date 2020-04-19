export default class Dragable {
    constructor(element) {
        this.element = element;
    }

    mount() {
        this.listen("mousedown", e => this.onMouseDown(e))
            .listen("mousemove", e => this.onMouseMove(e))
            .listen("mouseup", e => this.onMouseUp(e));
    }

    onMouseDown(event) {
        this.updateStart({
            x: event.clientX + this.element.scrollLeft,
            y: event.clientY + this.element.scrollTop,
        });

        this.updateDiff({
            x: 0,
            y: 0,
        });

        this.updateDrag(true);
    }

    onMouseMove(event) {
        if (!this.dragging) return;

        let x = this.start.x - (event.clientX + this.element.scrollLeft);
        let y = this.start.y - (event.clientY + this.element.scrollTop);

        this.updateDiff({ x, y });
        this.element.scrollLeft += x;
        this.element.scrollTop += y;
    }

    onMouseUp(event) {
        let start = 1;
        let element = this.element;
        let diff = this.diff;

        this.updateDrag(false);

        let animate = function() {
            let step = Math.sin(start);
            if (step <= 0) {
                window.cancelAnimationFrame(animate);
            } else {
                element.scrollLeft += diff.x * step;
                element.scrollTop += diff.y * step;
                start -= 0.05;
                window.requestAnimationFrame(animate);
            }
        };
        animate();
    }

    listen(event, callback) {
        this.element.addEventListener(event, res => callback(res));

        return this;
    }

    updateDrag(value) {
        this.dragging = value;

        return this;
    }

    updateStart(value) {
        this.start = value;

        return this;
    }

    updateDiff(value) {
        this.diff = value;

        return this;
    }
}
