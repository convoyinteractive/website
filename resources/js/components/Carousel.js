export default class Carousel {
    constructor(element) {
        let updateWidth = element => {
            let images = [];

            ["picture"].forEach(selector => {
                let elements = Array.from(element.querySelectorAll(selector));
                images.push(...elements);
            });

            let loaded = 0;
            images.forEach(image =>
                image.addEventListener("load", () => {
                    loaded++;

                    if (loaded === images.length) {
                        element.style.width = null;

                        let paddingWidth = parseFloat(
                            window
                                .getComputedStyle(element)
                                .getPropertyValue("padding-right"),
                        );

                        image.style.width = image.clientWidth + "px";
                        element.style.width =
                            element.scrollWidth + paddingWidth + "px";
                    }
                }),
            );
        };

        let timeout;

        let handleResize = () => {
            clearTimeout(timeout);
            timeout = setTimeout(() => updateWidth(element), 100);
        };

        window.addEventListener("resize", handleResize);

        document.addEventListener("turbolinks:before-cache", () =>
            window.removeEventListener("resize", handleResize),
        );

        updateWidth(element);

        this.element = element;
    }

    // ...
}
