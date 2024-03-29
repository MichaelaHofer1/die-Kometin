'use strict';
const htmlTag = document.querySelector('html')

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}

import "./nav"
import "./slideshow"
import {addAnimationClass} from "./animate-elements";
import {isInViewport} from "./animate-elements";
import {showToTopBtn} from "./btn-to-top";
import {homeHeadline} from "./headline-home";
import {mobilizonDisplay} from "./events";
import {readMore} from  "./shorten-text";
import "./lightbox"

document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    showToTopBtn()
    homeHeadline()
    mobilizonDisplay()
    category()
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