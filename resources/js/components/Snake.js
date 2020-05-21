const pixel = 16;

export default {
    data() {
        return {
            fresh: true,
            active: false,
            frames: 0,
            snake: {
                x: 160,
                y: 160,
                dx: pixel,
                dy: 0,
                items: [],
                count: 4,
            },
            apple: {
                x: 320,
                y: 320,
            },
        };
    },

    computed: {
        canvas() {
            return this.$refs.canvas;
        },

        context() {
            return this.canvas.getContext("2d");
        },
    },

    methods: {
        random(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        },

        resetFrames() {
            this.frames = 0;
            return this;
        },

        clearCanvas() {
            this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            return this;
        },

        moveSnake() {
            this.snake.x += this.snake.dx;
            this.snake.y += this.snake.dy;

            if (this.snake.x < 0) {
                this.snake.x = this.canvas.width - pixel;
            } else if (this.snake.x >= this.canvas.width) {
                this.snake.x = 0;
            }

            if (this.snake.y < 0) {
                this.snake.y = this.canvas.height - pixel;
            } else if (this.snake.y >= this.canvas.height) {
                this.snake.y = 0;
            }

            if (this.snake.y < 0) {
                this.snake.y = this.canvas.height - pixel;
            } else if (this.snake.y >= this.canvas.height) {
                this.snake.y = 0;
            }

            this.snake.items.unshift({ x: this.snake.x, y: this.snake.y });

            if (this.snake.items.length > this.snake.count) {
                this.snake.items.pop();
            }
        },

        drawApple() {
            this.context.fillStyle = "#000000";
            this.context.fillRect(
                this.apple.x,
                this.apple.y,
                pixel - 1,
                pixel - 1,
            );
        },

        drawSnake() {
            this.context.fillStyle = "#00ff00";

            this.snake.items.forEach((cell, index) => {
                this.context.fillRect(cell.x, cell.y, pixel - 1, pixel - 1);

                if (cell.x === this.apple.x && cell.y === this.apple.y) {
                    this.snake.count++;

                    this.apple.x = this.random(0, 50) * pixel;
                    this.apple.y = this.random(0, 50) * pixel;
                }

                for (let i = index + 1; i < this.snake.items.length; i++) {
                    if (
                        cell.x === this.snake.items[i].x &&
                        cell.y === this.snake.items[i].y
                    ) {
                        this.snake.x = 160;
                        this.snake.y = 160;
                        this.snake.items = [];
                        this.snake.count = 4;
                        this.snake.dx = pixel;
                        this.snake.dy = 0;

                        this.apple.x = this.random(0, 50) * pixel;
                        this.apple.y = this.random(0, 50) * pixel;
                    }
                }
            });
        },

        run() {
            this.active = true;
            this.fresh = false;
            this.$nextTick(() => this.canvas.focus());

            let loop = () => {
                window.requestAnimationFrame(loop);

                this.frames++;
                // Limit to 15fps
                if (this.frames < 4) {
                    return;
                }

                this.resetFrames()
                    .clearCanvas()
                    .moveSnake();

                this.drawApple();
                this.drawSnake();
            };

            window.requestAnimationFrame(loop);
        },

        moveLeft() {
            if (this.snake.dx === 0) {
                this.snake.dx = -pixel;
                this.snake.dy = 0;
            }
        },

        moveRight() {
            if (this.snake.dx === 0) {
                this.snake.dx = pixel;
                this.snake.dy = 0;
            }
        },

        moveUp() {
            if (this.snake.dy === 0) {
                this.snake.dy = -pixel;
                this.snake.dx = 0;
            }
        },

        moveDown() {
            if (this.snake.dy === 0) {
                this.snake.dy = pixel;
                this.snake.dx = 0;
            }
        },

        stop() {
            this.active = false;
        },
    },
};