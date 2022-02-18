import {Slider} from "../lib/slider";
if (document.querySelector("body.page-product")) {
    const sliderElement = document.querySelector(".slider");
    if (sliderElement) {
        window.carousel = new Slider(sliderElement);
        document
            .querySelector(".slider-buttons__back")
            .addEventListener("click", window.carousel.back.bind(window.carousel));
        document
            .querySelector(".slider-buttons__fwd")
            .addEventListener("click", window.carousel.fwd.bind(window.carousel));
    }
}
