'use strict';
const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"
import {addAnimationClass} from "./animate-elements";
import {isInViewport} from "./animate-elements";
import {showToTopBtn} from "./btn-to-top";
import {homeHeadline} from "./headine-home";
import {mobilizonDisplay} from "./events";
import {readMore} from  "./shorten-text";
import "./lightbox"
import "./slideshow"


document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    showToTopBtn()
    homeHeadline()
    mobilizonDisplay()
    readMore()
    addAnimationClass()
    isInViewport()
}, false)

document.addEventListener('scroll', function () {
    showToTopBtn()
    isInViewport()
})
window.addEventListener('resize', function () {
    isInViewport()

})