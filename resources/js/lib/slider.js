const CLASSNAMES = {
    cur: "cur",
    prev: "prev",
    next: "next",
    moving: "moving",
};

const DIRECTIONS = {
    back: -1,
    fwd: 1
};

export class Slider {
    constructor(el) {
        this.el = el;
        this.initSlides();
        this.direction = DIRECTIONS.fwd;
        this.initElement().initListener().addListerner();
    }

    initElement() {
        this.slider = this.el;
        return this;
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
            this.slidesIfOnlyTwoSlides(DIRECTIONS.fwd);
        } else {
            this.resetTransform();
            this.direction = DIRECTIONS.fwd;
            this.prepare();
            this.cur = this.cur + 1 > this.max ? 0 : this.cur + 1;
            this.setNeighbours();
            this.apply();
        }
    }

    back() {
        if (this.moving) return;
        if (this.max === 1) {
            this.slidesIfOnlyTwoSlides(DIRECTIONS.back);
        } else {
            this.resetTransform();
            this.direction = DIRECTIONS.back;
            this.prepare();
            this.cur = this.cur - 1 < 0 ? this.max : this.cur - 1;
            this.setNeighbours();
            this.apply();
        }
    }

    setNeighbours() {
        if (this.direction === DIRECTIONS.fwd) {
            this.next = this.cur === this.max ? 0 : this.cur + 1;
            this.prev = this.cur === 0 ? this.max : this.cur - 1;
        } else {
            this.next = this.cur === 0 ? this.max : this.cur - 1;
            this.prev = this.cur === this.max ? 0 : this.cur + 1;
        }
    }

    slidesIfOnlyTwoSlides(direction) {
        this.moving = true;
        // disable transition
        this.transition = false;
        requestAnimationFrame(() => {
            this.direction = direction;
            // exchange classes
            requestAnimationFrame(() => {
                // re-enable transition
                this.transition = true;
                requestAnimationFrame(() => {
                    this.slides[this.cur].addEventListener(
                        "transitionend",
                        () => {
                            requestAnimationFrame(() => {
                                this.transition = false;
                                this.slides[this.cur].classList.replace(
                                    CLASSNAMES.prev,
                                    CLASSNAMES.next
                                );
                                this.cur = Math.abs(this.cur - 1);
                                this.next = Math.abs(this.next - 1);
                                requestAnimationFrame(() => {
                                    this.transition = true;
                                    this.moving = false;
                                });
                            });
                        },
                        { once: true }
                    );
                    this.resetTransform();
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
        });
    }

    initListener() {
        this.handlePointerDown = this.pointerDownHandler.bind(this);
        this.handlePointerMove = this.pointerMoveHandler.bind(this);
        this.handlePointerUp = this.pointerUpHandler.bind(this);
        return this;
    }

    addListerner() {
        this.slider.addEventListener("pointerdown", this.handlePointerDown);
        document.addEventListener("pointermove", this.handlePointerMove);
        document.addEventListener("pointerup", this.handlePointerUp);
        document.addEventListener("pointerleave", this.handlePointerUp);
        return this;
    }

    pointerDownHandler(e) {
        e.preventDefault();
        if (this.moving) return;
        this.start = {
            x: e.pageX
        }
        this.transitionDuration = 0;
        return this;
    }

    pointerMoveHandler(e) {
        if(this.start) {
            const deltaX =  e.pageX - this.start.x;

            this.direction = deltaX < 0 ? DIRECTIONS.fwd : DIRECTIONS.back;
            this.slides[this.prev].classList.remove(CLASSNAMES.prev);
            this.slides[this.next].classList.remove(CLASSNAMES.next);
            this.setNeighbours();
            this.slides[this.next].classList.add(CLASSNAMES.next);
            if (this.max > 1) {
                this.slides[this.prev].classList.add(CLASSNAMES.prev);
            }

            this.slides[this.cur].style.transform =  `translateX(${deltaX}px)`;
            if ( this.direction === DIRECTIONS.fwd) {
                this.slides[this.next].style.transform =  `translateX(calc(${deltaX}px + 100%))`;
                if (this.max > 1) {
                    this.slides[this.prev].style.transform =  `translateX(calc(${deltaX}px - 100%))`;
                }
            } else {
                this.slides[this.next].style.transform =  `translateX(calc(${deltaX}px - 100%))`;
                if (this.max > 1) {
                    this.slides[this.prev].style.transform =  `translateX(calc(${deltaX}px + 100%))`;
                }
            }
        }
        return this;
    }

    pointerUpHandler(e) {
        if (this.start) {
            this.transitionDuration = false;
            const deltaX = e.pageX - this.start.x;
            delete this.start;
            if (deltaX < 0) {
                this.fwd();
            } else {
                this.back();
            }
        }
        return this;
    }

    set transitionDuration(dur) {
        this.el.style.setProperty(
            "--transition-duration",
            "boolean" === typeof dur ? "" : `${dur}ms`
        );
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

    resetTransform() {
        this.slides[this.cur].style.transform = "";
        this.slides[this.next].style.transform = "";
        this.slides[this.prev].style.transform = "";
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
        this.el.style.setProperty("--move", d.toString());
    }

    get direction() {
        return parseInt(this.el.style.getPropertyValue("--move"));
    }

    set itemCount(i) {
        this.el.style.setProperty("--item-count", i);
    }

    get itemCount() {
        return this.el.style.getPropertyValue("--item-count");
    }
}
