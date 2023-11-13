'use strict';

const pictures = document.querySelectorAll('.customizeable-img:not(.img-link)');
const lightboxContainer = document.querySelector('.lightbox-container');
const openLightbox = function () {
    pictures.forEach((img) => {
        img.addEventListener('click', function () {
            lightboxContainer.classList.add('lightbox-container--active');
            img.classList.add('delay')

            setTimeout(function () {
                img.classList.add('big')
            }, 0)
        })
    })
}

const removeLightbox = function () {
    lightboxContainer.addEventListener('click', function () {
        lightboxContainer.classList.remove('lightbox-container--active');

        pictures.forEach((img, i) => {
            img.classList.remove('delay')
            img.classList.remove('big')
        })
    })
}

if (lightboxContainer) {
    openLightbox()
    removeLightbox()
}