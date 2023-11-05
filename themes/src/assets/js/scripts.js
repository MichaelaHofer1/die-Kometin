'use strict';

const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"




const homeHeadline = function () {
    const homeH1 = document.getElementById('homeHeadline');
    const newHomeH1 = homeH1.textContent.split(' ');

    homeH1.innerHTML = newHomeH1[0] + " <span class='firstSpan'>" + newHomeH1[1] + "</span>" + "<br> " + "<span class='secondSpan'>" + newHomeH1[2] + "</span>"

    //homeH1.textContent = newHomeH1.join('\n');

    console.log(homeH1, 'with breaks:', newHomeH1, 'test:', newHomeH1[1])

}







document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    homeHeadline()
}, false)
