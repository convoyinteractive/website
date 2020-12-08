export default {
    data() {
        return {
            show: false,
        };
    },
    methods: {
        handle() {
            if (!document.fullscreenElement) {
                this.show = false;
            }
        },
    },
    watch: {
        show(show) {
            show
                ? this.$refs.target.requestFullscreen()
                : document.exitFullscreen();
        },
    },
};
