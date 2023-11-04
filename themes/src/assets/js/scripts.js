'use strict';

const htmlTag = document.querySelector('html');

function jsLoaded() {
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
};

import "./nav"

document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
}, false)
