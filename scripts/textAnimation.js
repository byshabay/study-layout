{
    const effects = [
        // Effect 4
        {
            options: {
                // shape elements will be on top of the letters
                shapesOnTop: true,
                shapeColors: ['#ec4747', '#5447ec', '#ecb447', '#a847ec', '#635f65'],
                totalShapes: 20
            },
            hide: {
                lettersAnimationOpts: {
                    duration: 200,
                    delay: (t, i, total) => (total - i - 1) * 20,
                    easing: 'easeOutExpo',
                    opacity: {
                        value: [1, 0],
                        duration: 100,
                        delay: (t, i, total) => (total - i - 1) * 20,
                        easing: 'linear'
                    },
                    scale: [1, 0]
                }
            },
            show: {
                lettersAnimationOpts: {
                    duration: 400,
                    delay: (t, i) => i * 60,
                    easing: 'easeInOutExpo',
                    opacity: [0, 1],
                    translateY: ['-100%', '0%']
                },
                shapesAnimationOpts: {
                    duration: 400,
                    delay: (t, i) => i * 20,
                    easing: 'easeOutBack',
                    translateX: {
                        value: () => [anime.random(-100, 100), anime.random(-10, 10)],
                        easing: 'easeOutExpo',
                    },
                    translateY: () => [anime.random(-100, 0), anime.random(-400, -50)],
                    scale: () => {
                        const rand = randomBetween(0.2, 0.5);
                        return [rand, rand];
                    },
                    rotate: () => anime.random(-15, 15),
                    opacity: [
                        {
                            value: 1,
                            duration: 1,
                            delay: (t, i) => i * 20
                        },
                        {
                            value: 0,
                            duration: 500,
                            easing: 'linear'
                        }
                    ]
                }
            }
        }
    ];

    class Slideshow {
        constructor(el) {
            this.DOM = {};
            this.DOM.el = el;
            this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slide'));
            this.DOM.bgs = Array.from(this.DOM.el.querySelectorAll('.slide__bg'));
            this.DOM.words = Array.from(this.DOM.el.querySelectorAll('.word'));
            this.slidesTotal = this.DOM.slides.length;
            this.current = 0;
            this.words = [];
            this.DOM.words.forEach((word, pos) => {
                this.words.push(new Word(word, effects[pos].options));
            });

            this.isAnimating = true;
            this.words[this.current].show(effects[this.current].show).then(() => this.isAnimating = false);
        }
        show(direction) {
            if (this.isAnimating) return;
            this.isAnimating = true;

            let newPos;
            let currentPos = this.current;
            if (direction === 'next') {
                newPos = currentPos < this.slidesTotal - 1 ? currentPos + 1 : 0;
            }
            else if (direction === 'prev') {
                newPos = currentPos > 0 ? currentPos - 1 : this.slidesTotal - 1;
            }

            this.DOM.slides[newPos].style.opacity = 1;
            this.DOM.bgs[newPos].style.transform = 'none';
            anime({
                targets: this.DOM.bgs[currentPos],
                duration: 600,
                easing: [0.2, 1, 0.3, 1],
                translateY: ['0%', direction === 'next' ? '-100%' : '100%'],
                complete: () => {
                    this.DOM.slides[currentPos].classList.remove('slide--current');
                    this.DOM.slides[currentPos].style.opacity = 0;
                    this.DOM.slides[newPos].classList.add('slide--current');
                    this.words[newPos].show(effects[newPos].show).then(() => this.isAnimating = false);
                }
            });

            this.words[newPos].hide();
            this.words[this.current].hide(effects[currentPos].hide).then(() => {

                this.current = newPos;
            });
        }
    }

    const slideshow = new Slideshow(document.querySelector('.slideshow'));
    // document.querySelector('.slidenav__item--prev').addEventListener('click', () => slideshow.show('prev'));
    // document.querySelector('.slidenav__item--next').addEventListener('click', () => slideshow.show('next'));
    document.addEventListener('keydown', (ev) => {
        const keyCode = ev.keyCode || ev.which;
        if (keyCode === 37) {
            slideshow.show('prev');
        }
        else if (keyCode === 39) {
            slideshow.show('next');
        }
    });
}