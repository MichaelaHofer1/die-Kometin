'use strict';
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    const slideContainer = document.getElementById('slideshow')
    const pictures = document.querySelectorAll('.gallery-imgs--visible')
    const btnClose = document.querySelector('.btn-close-lb');
    const slideShowContainer = document.querySelector('.splide')
    const bigLightbox = document.querySelectorAll('.splide__slide')
    let numberOfSlide = 0

    const openLightbox = function () {
        if(slideContainer) {
            pictures.forEach((slide) => {
                slide.addEventListener('click', function () {
                    numberOfSlide = slide.dataset.number;

                    slideContainer.classList.remove('lightbox-hidden');
                    slideContainer.classList.add('lightbox-active');

                    splideSliderInitalize()
                })
            })


            bigLightbox.forEach((box) => {
                box.addEventListener('click', ( ) => {
                    slideContainer.classList.add('lightbox-hidden');
                    slideContainer.classList.remove('lightbox-active');

                })
            })


            btnClose.addEventListener('click', () => {
                slideContainer.classList.add('lightbox-hidden');
                slideContainer.classList.remove('lightbox-active');
            })
        }
    }


    const splideSliderInitalize = function () {
        let splide = new Splide('.splide', {
            start: numberOfSlide,
            type: 'loop',
            perPage: 1,
            pagination: false,
            mediaQuery: 'min',
            autoplay: false,
            easing: 'ease',
            drag: true,
            rewind: false,
            arrows: true,
            keyboard: 'global'
        });
        splide.mount();
    };


    if (slideShowContainer) {
        openLightbox()
    }
}, false)

