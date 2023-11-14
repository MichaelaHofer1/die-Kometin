'use strict';
const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"
import {showToTopBtn} from "./btn-to-top";
import {homeHeadline} from "./headine-home";
import {mobilizonDisplay} from "./events";
import {readMore} from  "./shorten-text";
import "./lightbox"


document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    showToTopBtn()
    homeHeadline()
    mobilizonDisplay()
    readMore()
}, false)

document.addEventListener('scroll', function () {
    showToTopBtn()
})