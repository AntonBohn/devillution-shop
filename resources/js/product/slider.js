const CLASSNAMES = {
    cur: "cur",
    prev: "prev",
    next: "next",
    moving: "moving",
};

const DIRECTIONS = {
    back: -1,
    fwd: 1,
};

class Slider {
    constructor(el) {
        this.el = el;
        this.initSlides();
        this.direction = DIRECTIONS.fwd;
    }

    initSlides() {
        this.slides = Array.from(this.el.querySelectorAll(":scope > *"));
        this.itemCount = this.slides.length;
        this.max = this.slides.length - 1;
        this.cur = 0;
        this.next = 1;
        this.prev = this.max;
        this.slides[this.cur].classList.add(CLASSNAMES.cur);
        this.slides[this.next].classList.add(CLASSNAMES.next);
        this.max > 1 && this.slides[this.prev].classList.add(CLASSNAMES.prev);
        return this;
    }

    fwd() {
        if (this.moving) return;
        if (this.max === 1) {
            this.moving = true;
            // disable transition
            this.transition = false;
            requestAnimationFrame(() => {
                this.direction = DIRECTIONS.fwd;
                // exchange classes
                this.slidesIfOnlyTwoSlides();
            });
        } else {
            this.direction = DIRECTIONS.fwd;
            this.prepare();
            this.cur = this.cur + 1 > this.max ? 0 : this.cur + 1;
            this.next = this.cur === this.max ? 0 : this.cur + 1;
            this.prev = this.cur === 0 ? this.max : this.cur - 1;
            this.apply();
        }
    }

    back() {
        if (this.moving) return;
        if (this.max === 1) {
            this.moving = true;
            // disable transition
            this.transition = false;
            requestAnimationFrame(() => {
                this.direction = DIRECTIONS.back;
                // exchange classes
                this.slidesIfOnlyTwoSlides();
            });
        } else {
            this.direction = DIRECTIONS.back;
            this.prepare();
            this.cur = this.cur - 1 < 0 ? this.max : this.cur - 1;
            this.next = this.cur === 0 ? this.max : this.cur - 1;
            this.prev = this.cur === this.max ? 0 : this.cur + 1;
            this.apply();
        }
    }

    slidesIfOnlyTwoSlides() {
        // exchange classes
        requestAnimationFrame(() => {
            // re-enable transition
            this.transition = true;
            requestAnimationFrame(() => {
                this.slides[this.cur].addEventListener(
                    "transitionend",
                    () => {
                        this.moving = false;
                        requestAnimationFrame(() => {
                            this.slides[this.cur].classList.replace(
                                CLASSNAMES.prev,
                                CLASSNAMES.next
                            );
                            this.cur = Math.abs(this.cur - 1);
                            this.next = Math.abs(this.next - 1);
                        });
                    },
                    { once: true }
                );
                this.slides[this.cur].classList.replace(
                    CLASSNAMES.cur,
                    CLASSNAMES.prev
                );
                this.slides[this.next].classList.replace(
                    CLASSNAMES.next,
                    CLASSNAMES.cur
                );
            });
        });
    }

    prepare() {
        this.slides[this.cur].classList.remove(CLASSNAMES.cur);
        this.slides[this.prev].classList.remove(CLASSNAMES.prev);
        this.slides[this.next].classList.remove(CLASSNAMES.next);
        return this;
    }

    apply() {
        this.slides[this.cur].addEventListener(
            "transitionend",
            () => (this.moving = false)
        );
        this.moving = true;
        this.slides[this.cur].classList.add(CLASSNAMES.cur);
        this.slides[this.prev].classList.add(CLASSNAMES.prev);
        this.slides[this.next].classList.add(CLASSNAMES.next);
        return this;
    }

    set moving(m) {
        this.el.classList.toggle(CLASSNAMES.moving, m === true);
    }

    get moving() {
        return this.el.classList.contains(CLASSNAMES.moving);
    }

    set transition(t) {
        this.el.style.setProperty(
            "--transition-property",
            t === true ? "" : "none"
        );
    }

    get transition() {
        return this.el.style.getPropertyValue("--transition-property");
    }

    set direction(d) {
        this.el.style.setProperty("--move", d);
    }

    get direction() {
        return this.el.style.getPropertyValue("--move");
    }

    set itemCount(i) {
        this.el.style.setProperty("--item-count", i);
    }

    get itemCount() {
        return this.el.style.getPropertyValue("--item-count");
    }
}

const carousel = new Slider(document.querySelector(".slider"));
document
    .querySelector(".buttons button:first-child")
    .addEventListener("click", carousel.back.bind(carousel));
document
    .querySelector(".buttons button:last-child")
    .addEventListener("click", carousel.fwd.bind(carousel));

const carousel2 = new Slider(document.querySelector(".slider2"));
document
    .querySelector(".buttons2 button:first-child")
    .addEventListener("click", carousel2.back.bind(carousel2));
document
    .querySelector(".buttons2 button:last-child")
    .addEventListener("click", carousel2.fwd.bind(carousel2));
