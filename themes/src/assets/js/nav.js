'use strict';

const navBar = document.getElementById('nav-bar');
const subNav = document.querySelectorAll('.sub-menu');

const subNavAnimate = function () {
    subNav.forEach((sub, i) => {
        sub.classList.add('.nav__active')
    })
}
