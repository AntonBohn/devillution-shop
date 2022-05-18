export class GalleryControls {
    constructor(carousel, selectorThumbnails, selectorBack, selectorFwd) {
        this.carousel = carousel;
        this.selectorThumbnails = selectorThumbnails;
        this.selectorBack = selectorBack;
        this.selectorFwd = selectorFwd;
        this.initElement().addListener();
    }

    initElement() {
        this.thumbnails = [...document.querySelectorAll(this.selectorThumbnails)];
        this.buttonback = document.querySelector(this.selectorBack);
        this.buttonfwd = document.querySelector(this.selectorFwd);
        return this;
    }

    addListener() {
        this.thumbnails.forEach((curEl, idx) => {
            curEl.addEventListener("click", () => this.carousel.jumpTo(idx));
        });
        this.buttonback.addEventListener("click", this.carousel.back.bind(this.carousel));
        this.buttonfwd.addEventListener("click", this.carousel.fwd.bind(this.carousel));
        return this;
    }
}


