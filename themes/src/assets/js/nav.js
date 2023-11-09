'use strict';

const navBar = document.getElementById('nav-bar');
const subNav = document.querySelectorAll('.sub-menu');

const subNavAnimate = function () {
    subNav.forEach((sub, i) => {
        sub.classList.add('.nav__active')
    })
}

const navHover = function (e, opacity, transition) {
    if(e.target.classList.contains('nav__link')) {
        const link = e.target;
        const sibling = link.closest('#nav-bar').querySelectorAll('.nav__link');
        const logo = link.closest('#nav-bar').querySelector('.custom-logo');


        sibling.forEach(el => {
            if ( el !== link) {
                el.style.opacity = opacity;
                el.style.transition = transition;
            }
        })
        logo.style.opacity = opacity;
        logo.style.transition = transition;
    }
}
navBar.addEventListener('mouseover', function (e) {
    navHover(e, .4, 'opacity ease-in 150ms')
})
navBar.addEventListener('mouseout', function (e) {
    navHover(e, 1, 'opacity ease-out 150ms')
})

subNavAnimate();