export default {
    render: function(h) {
        return h(
            "div",
            {
                on: {
                    mousedown: this.onMouseDown,
                    mousemove: this.onMouseMove,
                    mouseup: this.onMouseUp,
                },
                ref: "element",
            },
            this.$slots.default,
        );
    },

    methods: {
        onMouseDown(event) {
            this.updateStart({
                x: event.clientX + this.$refs.element.scrollLeft,
                y: event.clientY + this.$refs.element.scrollTop,
            });

            this.updateDiff({
                x: 0,
                y: 0,
            });

            this.updateDrag(true);
        },

        onMouseMove(event) {
            if (!this.dragging) return;

            let x =
                this.start.x - (event.clientX + this.$refs.element.scrollLeft);
            let y =
                this.start.y - (event.clientY + this.$refs.element.scrollTop);

            this.updateDiff({ x, y });
            this.$refs.element.scrollLeft += x;
            this.$refs.element.scrollTop += y;
        },

        onMouseUp(event) {
            let start = 1;
            let element = this.$refs.element;
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
        },

        updateDrag(value) {
            this.dragging = value;

            return this;
        },

        updateStart(value) {
            this.start = value;

            return this;
        },

        updateDiff(value) {
            this.diff = value;

            return this;
        },
    },
};
