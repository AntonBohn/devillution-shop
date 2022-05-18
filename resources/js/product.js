import {Slider} from "./lib/slider";
import {GalleryControls} from "./product/GalleryControls";
if(document.querySelector("body.page-product")) {
    const sliderElement = document.querySelector(".slider");
    if(sliderElement) {
        window.carousel = new Slider(sliderElement);
        const gallerycontrolls = new GalleryControls(
            carousel,
            ".thumbnails > img",
            ".button-back",
            ".button-fwd"
        );
    }
}
