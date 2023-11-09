'use strict';

const toTopBtn = document.getElementById('to-top');
const showToTopBtn = function () {
    if (window.scrollY > 250) {
        toTopBtn.classList.add('show')
    } else {
        toTopBtn.classList.remove('show')
    }
}

toTopBtn.addEventListener('click', function () {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})

document.addEventListener('DOMContentLoaded', function () {
    showToTopBtn()
}, false)

document.addEventListener('scroll', function () {
    showToTopBtn()
})