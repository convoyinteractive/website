/**
 * Originally forked from Jeffrey Guenther's vue-turbolinks
 * licensed under MIT Copyright (c) Jeffrey Guenther
 *
 * @see https://github.com/jeffreyguenther/vue-turbolinks
*/

const destroy = vue => {
    let event = vue.$options.turbolinksDestroyEvent || 'turbolinks:visit';
    document.addEventListener(event, function teardown() {
        vue.$destroy();
        document.removeEventListener(event, teardown);
    });
}

export default {
    beforeMount() {
        if (this === this.$root && this.$el) {
            destroy(this);

            this.$turbolinksCachedHtml = this.$el.outerHTML;

            this.$once('hook:destroyed', () => {
                this.$el.outerHTML = this.$turbolinksCachedHtml
            });
        }
    }
};
