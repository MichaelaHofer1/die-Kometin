'use strict';

export function readMore() {
    const memberDescription = document.querySelectorAll('.member-description');
    const dots = '...';
    let counter = 0;
    let btnMore = document.querySelectorAll('.btn-show-more');

    for (let el = 0; el < memberDescription.length; el++) {
        if (memberDescription[el].textContent.length >= 450) {
            memberDescription[el].parentElement.querySelector('.btn-show-more').style.display = 'block';
            const visibleText = memberDescription[el].innerHTML.substring(0, 450);
            const hiddenText = memberDescription[el].innerHTML.substring(450, memberDescription[el].innerHTML.length);
            const fullText = visibleText + hiddenText;

            memberDescription[el].innerHTML = visibleText + dots

            for (let e = 0; e < btnMore.length; e++) {
                btnMore[e].addEventListener('click', function () {

                    if (counter === 0) {
                        memberDescription[el].innerHTML = fullText
                        btnMore[e].parentElement.querySelector('.btn-show-more').innerHTML = 'weniger ansehen'
                        return counter = 1;

                    }
                    if (counter === 1) {
                        memberDescription[el].innerHTML = visibleText + dots;
                        btnMore[e].parentElement.querySelector('.btn-show-more').innerHTML = 'mehr ansehen'
                        return counter = 0;
                    }
                })
            }
        }
    }
}
