export default {
    data: () => {
        return {
            isOpen: false,
            current: null
        };
    },

    mounted() {
        document.addEventListener("turbolinks:click", event => this.close());
    },

    methods: {
        open(value) {
            this.current = value;
            this.isOpen = true;
        },

        close() {
            this.current = null;
            this.isOpen = false;
        },

        isActive(key) {
            return this.current === key;
        }
    }
};
