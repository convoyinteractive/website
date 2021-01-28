export default {
    props: {
        autoplay: {
            type: Boolean,
            default: false,
        },
        cursor: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            paused: true,
            muted: true,
            time: {
                current: 0,
                duration: 0,
            },
            controls: {
                show: true,
                timer: null,
            },
        };
    },

    mounted() {
        this.paused = this.video.paused;
        this.muted = this.video.muted;
    },

    computed: {
        video() {
            return this.$refs.video;
        },

        progress() {
            if (!this.time.duration) {
                return 0;
            }
            return (this.time.current / this.time.duration) * 100;
        },
    },

    methods: {
        updateTime() {
            this.time = {
                current: this.video.currentTime,
                duration: this.video.duration,
            };
        },
        calculateAndUpdateProgress(event) {
            let progress = event.target.value / 100;

            this.video.currentTime = this.time.duration * progress;

            this.updateTime();
        },

        showControls(seconds) {
            clearTimeout(this.timer);
            this.controls.show = true;
            if (seconds) {
                this.timer = setTimeout(() => {
                    this.controls.show = false;
                }, seconds * 1000);
            }
        },

        reset() {
            this.paused = true;
            this.video.currentTime = 0;
        },
    },

    watch: {
        paused(value) {
            if (this.cursor) {
                this.$root.cursor.label = value ? "Play" : "Pause";
            }

            value ? this.video.pause() : this.video.play();
        },

        muted(value) {
            this.video.muted = value;
        },

        autoplay(value) {
            this.paused = !value;
        },
    },
};
