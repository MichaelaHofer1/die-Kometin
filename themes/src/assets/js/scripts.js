'use strict';

const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"
import "./btn-to-top"
import "./shorten-text"
import "./events"





//Headline Home h1 linebreak
const homeHeadline = function () {
    const homeH1 = document.getElementById('homeHeadline');
    if(homeH1) {
        const newHomeH1 = homeH1.textContent.split(' ');
        homeH1.innerHTML = newHomeH1[0] + " <span class='firstSpan'>" + newHomeH1[1] + "</span>" + "<br> " + "<span class='secondSpan'>" + newHomeH1[2] + "</span>"
    }
}


//mobilizon events
const mobilizonSection = document.querySelectorAll('.connector-mobilizon_events-list')
const mobilizonDisplay = function () {
    if(mobilizonSection) {
        mobilizonSection.forEach((list, i) => {
            list.classList.add('event-list')
            console.log(mobilizonSection)
        })
    }
}




document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    homeHeadline()
    mobilizonDisplay()
}, false)
