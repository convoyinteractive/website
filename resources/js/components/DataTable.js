export default {
    render: function(h) {
        let renderChildren = function(item) {
            if (item.value.length === 1) {
                return item.value;
            }

            return [
                h(
                    "ul",
                    item.value.map(value => {
                        return h("li", value);
                    }),
                ),
            ];
        };

        let data = this.data.map(item => {
            let label = h("dt", item.label);
            let value = h("dd", renderChildren(item));
            return [label, value];
        });

        return h("dl", [data]);
    },

    props: ["data"],
};
