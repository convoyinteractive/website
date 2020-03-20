export default {
    data: () => {
        return {
            isOpen: false,
        };
    },

    methods: {
        toggle() {
            this.isOpen = ! this.isOpen;
        }
    },
}
