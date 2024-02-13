'use strict';
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    const slideShowContainer = document.querySelector('.splide')
    let numberOfSlide = 3

    const splideSliderInitalize = function () {
        let splide = new Splide('.splide', {
            start: numberOfSlide,
            type: 'loop',
            perPage: 1,
            pagination: true,
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
        splideSliderInitalize()
    }
}, false)

