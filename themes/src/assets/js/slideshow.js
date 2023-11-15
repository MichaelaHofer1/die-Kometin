'use strict';

// Gallery Sliders
const slider = function (numberOfSlideShow) {
    //const slides = document.querySelectorAll('.slide');
    const slideContainer = document.querySelector(`.slider--${numberOfSlideShow}`);
    const slideOfOneSlider = slideContainer.querySelectorAll('.slide');
    const dotContainer = document.querySelectorAll('.dots')
    dotContainer.forEach(function (cur, i) {
        cur.classList.add(`dotContainer--${i}`)
    })
    const currentDotContainer = document.querySelector(`.dotContainer--${numberOfSlideShow}`)

    let curSlide = 0
    let maxSlide = slideOfOneSlider.length

    // creating Dots and active Dot
    const createDots = function () {
        for (let i = 0; i < maxSlide; i++) {
            currentDotContainer.insertAdjacentHTML('beforeend',`<button class="dots__dot" data-slide="${i}"></button>`)
        }
    }

    const activateDot = function (slide) {
        const dots = currentDotContainer.querySelectorAll('.dots__dot')
        const dotActive = currentDotContainer.querySelector(`.dots__dot[data-slide="${slide}"]`)

        dots.forEach(dot => dot.classList.remove('.dots__dot--active'));
        dots.forEach(dot => dot.style.backgroundColor = '#5b5b5b')

        dotActive.classList.add('.dots__dot--active')
        dotActive.style.backgroundColor = 'white'

    };

    // go to slide
    const goToSlide = function (slide) {
        slideOfOneSlider.forEach( (s, i) =>
            s.style.transform = `translateX(${100 * (i-slide)}%)`)
    }


    // next slide
    const nextSlide = function () {
        if(curSlide === maxSlide - 1) {
            curSlide = 0;
        } else {
            curSlide++
        }
        goToSlide(curSlide);
        activateDot(curSlide);
    }

    // previous slide
    const prevSlide = function () {
        if ( curSlide === 0) {
            curSlide = maxSlide - 1;
        } else {
            curSlide--
        }
        goToSlide(curSlide)
        activateDot(curSlide)
    }

    const init = function () {
        goToSlide(0);
        createDots();
        activateDot(curSlide);
    }
    init();

    document.addEventListener('keydown', function (e) {
        if(e.key === 'ArrowLeft') prevSlide();
        if(e.key === 'ArrowRight') nextSlide();
    })

    currentDotContainer.addEventListener('click', function (e) {
        if(e.target.classList.contains('dots__dot')) {
            const {slide} = e.target.dataset;
            goToSlide(slide)
            activateDot(slide)
        }
    })

    ///// stopping Slider when hovering, starting when non-hovering
    let sliderInterval;
    const startRotation = function () {
        if(!sliderInterval) {
            sliderInterval = setInterval(nextSlide, 3000);
        }
    }
    const stopRotation = function () {
        clearInterval(sliderInterval);
        sliderInterval = null;
    }


    const lightboxContainer = document.querySelector('.lightbox-container--active');

    if (lightboxContainer) {
        slideContainer.addEventListener('mouseout', stopRotation)
    } else {
        slideContainer.addEventListener('mouseout', startRotation)
    }

    slideContainer.addEventListener('mouseover', stopRotation)
    slideContainer.addEventListener('click', stopRotation)


    slideContainer.addEventListener('mouseover', function() {
        slideContainer.style.cursor = 'pointer'
    })

}

const sliderExists = document.querySelector('.slideshow-container') || false
if (sliderExists) {
    document.querySelectorAll('.slideshow-container').forEach(function (cur, i) {
        cur.classList.add(`slider--${i}`)
        slider(i)
    })
}

