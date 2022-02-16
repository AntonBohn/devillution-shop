import {Slider} from "../lib/slider";
if (document.querySelector("body.page-product")) {
    const sliderElement = document.querySelector(".slider");
    if (sliderElement) {
        const carousel = new Slider(sliderElement);
        document
            .querySelector(".buttons button:first-child")
            .addEventListener("click", carousel.back.bind(carousel));
        document
            .querySelector(".buttons button:last-child")
            .addEventListener("click", carousel.fwd.bind(carousel));
    }
}
