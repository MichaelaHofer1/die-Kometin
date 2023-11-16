'use strict';
//Headline Home h1 linebreak
export const homeHeadline = function () {
    const homeH1 = document.getElementById('homeHeadline');
    if(homeH1) {
        const newHomeH1 = homeH1.textContent.split(' ');
        homeH1.innerHTML = "<span class='firstSpan'>" + newHomeH1[0] + "</span>" + "<br> " + "<span class='secondSpan'>" + newHomeH1[1] + "</span>"
    }
}