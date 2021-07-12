export default {
    props: ['data'],
    render(h) {
        return h('span', this.text);
    },
    data() {
        return { text: '' };
    },
    computed: {
        lines() {
            if (Array.isArray(this.data)) {
                return this.data;
            }

            return [this.data];
        }
    }
}
