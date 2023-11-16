'use strict';

export const isInViewport = function () {
    let elements = document.querySelectorAll('.animate')
    let animatedElement = 'animated'

    let windowTopPosition = window.scrollY
    let windowHeight = window.innerHeight || document.documentElement.clientHeight
    let windowBottom = windowTopPosition + windowHeight

    for (let i = 0; i < elements.length; i++) {
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition

        if (elementBottomPosition > windowTopPosition && elementTopPosition < windowBottom) {
            elements[i].classList.add(animatedElement)
        }
    }
}
export const addAnimationClass = function () {
    const addClassAnimate = document.querySelectorAll('div, h2, h3, section > li, p');

    addClassAnimate.forEach((el) => {
        el.classList.add('animate')
    })
}