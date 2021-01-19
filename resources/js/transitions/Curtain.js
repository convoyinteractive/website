import Waypoints from "../mixins/Waypoints";
import gsap, {Power2} from "gsap";

export default {
    inserted(element, bindings) {
        element.classList.add("relative" , "overflow-hidden");

        let image = element.children[0];
        let cover = document.createElement("div");
        cover.classList.add("h-full", "w-full", bindings.value, "absolute", "top-0", "left-0");
        
        if(element.dataset.theme){
            cover.style.backgroundColor = JSON.parse(element.dataset.theme).background;
        }
        element.append(cover);

        let complete = false;

        let tl = gsap.timeline({
            paused: true,
            onComplete: () => {
                complete = true;
                cover.remove();
            },
        })
        .fromTo(
            cover, {
                y: "100%",
            },{
                y: "-100%",
                duration: .5,
                ease: Power2.easeInOut
            },
            "0"
        )
        .fromTo(
            image, {
                visibility: "hidden",
                y: "20%",
            },{
                visibility: "visible",
                y: "0%",
                duration: .25,
                ease: Power2.easeOut
            },
            ".25"
        )

        tl.duration(1.5);

        new Waypoints.Waypoint({
            element: element,
            handler: direction => {
                if (!complete) {
                    tl.play();
                }
            },
            offset: function() {
                return Waypoint.viewportHeight() * .9
            },
        });

    },
};
