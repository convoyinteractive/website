import Http from "axios";
import { shortNumber } from "../helpers";

let timer;

export default {
    props: ["resource"],

    data() {
        return {
            count: 0,
            increment: 0,
        };
    },

    mounted() {
        this.fetch();
    },

    methods: {
        fetch() {
            this.increment = 0;
            Http.get("/api/likes/" + this.resource).then(({ data }) => {
                this.count = data;
            });
        },
        honk() {
            this.$refs.audio.currentTime = 0;
            this.$refs.audio.play();
        },
        update() {
            this.increment++;
            clearTimeout(timer);

            timer = setTimeout(() => {
                Http.post("/api/likes", {
                    resource: this.resource,
                    increment: this.increment,
                }).then(this.fetch);
            }, 500);

            this.honk();
        },
    },

    computed: {
        likes() {
            return shortNumber(this.count + this.increment);
        },
    },

    render: function(h) {
        let sound = h("audio", {
            ref: "audio",
            attrs: {
                src: "/honk.mp3",
            },
        });

        let count = h(
            "div",
            {
                class:
                    "absolute flex items-center justify-center text-xs font-sans transform -translate-y-1/2 top-0 right-0 w-8 h-8 rounded-full bg-green text-white",
            },
            this.likes,
        );
        return h(
            "button",
            {
                class: "relative",
                on: {
                    click: this.update,
                },
            },
            [count, this.$slots.default, sound],
        );
    },
};
