import Http from "axios";

export default {
    data() {
        return {
            email: "",
            privacy: false,
            locale: null,
        };
    },

    mounted() {
        this.locale = document.documentElement.lang;
    },

    computed: {
        data() {
            return {
                email: this.email,
                privacy: this.privacy,
                locale: this.locale,
            };
        },
    },

    methods: {
        subscribe() {
            Http.post("/api/subscriptions", this.data)
                .then(response => console.log(response))
                .catch(errors => console.error(errors));
        },
    },
};
