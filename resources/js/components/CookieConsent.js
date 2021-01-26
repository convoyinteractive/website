export default {
    data() {
        return {
            show: false,
            consent: {},
        }
    },
    mounted() {
        this.show = cookieguard.isExpired();
    },
    methods: {
        enable() {
            cookieguard.update(['ga']);
            this.show = cookieguard.isExpired();
        },
        disable() {
            cookieguard.update();
            this.show = cookieguard.isExpired();
        },
    }
}
