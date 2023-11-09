'use strict';

const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"
/*
import "./particles"
import "./app"
*/



//Headline Home h1 linebreak
const homeHeadline = function () {
    const homeH1 = document.getElementById('homeHeadline');
    if(homeH1) {
        const newHomeH1 = homeH1.textContent.split(' ');
        homeH1.innerHTML = newHomeH1[0] + " <span class='firstSpan'>" + newHomeH1[1] + "</span>" + "<br> " + "<span class='secondSpan'>" + newHomeH1[2] + "</span>"
    }
}







document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    homeHeadline()
}, false)
