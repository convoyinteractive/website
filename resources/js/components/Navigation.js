import Turbolinks from "turbolinks";

export default {
    data: () => {
        return {
            isOpen: false,
            current: null,
            children: [],
            selected: null,
        };
    },

    mounted() {
        document.addEventListener("turbolinks:click", event => {
            if (this.isOpen) {
                Turbolinks.clearCache();
            }

            this.close();
        });
    },

    methods: {
        toggle(value) {
            this.isActive(value) ? this.close() : this.open(value);
        },

        open(value) {
            this.current = value;
            this.isOpen = true;
            this.children = Array.from(this.$refs[value].querySelectorAll("a"));

            if (this.hasChildren()) {
                this.$nextTick(() => this.focus(0));
            }

            document.body.style.overflow = "hidden";
        },

        close() {
            this.current = null;
            this.isOpen = false;
            this.children = [];
            this.selected = null;

            document.body.style.overflow = "auto";
        },

        focus(index) {
            if (!this.hasChildren()) {
                return;
            }

            index = Math.min(Math.max(index, 0), this.children.length - 1);
            this.selected = index;
            this.children[index].focus();
        },

        onKeydown(key) {
            switch (key.code) {
                case "Escape":
                    this.close();
                    break;
                case "ArrowDown":
                    this.focus(this.selected + 1);
                    break;
                case "ArrowUp":
                    this.focus(this.selected - 1);
                    break;
            }
        },

        hasChildren() {
            return !!this.children.length;
        },

        isActive(key) {
            return this.current === key;
        },
    },
};
