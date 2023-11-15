'use strict';
export function readMore() {
    const memberDescription = document.querySelectorAll('.member-description');
    const dots = '...';

    for (let el = 0; el < memberDescription.length; el++) {
        if (memberDescription[el].textContent.length >= 470) {
            const memberEl = memberDescription[el];
            const btnElement = memberEl.parentElement.querySelector('.btn-show-more');
            const visibleText = memberEl.innerHTML.substring(0, 470);
            const hiddenText = memberEl.innerHTML.substring(470, memberEl.innerHTML.length);
            const fullText = visibleText + hiddenText;

            btnElement.style.display = 'block';
            btnElement.classList.add('isHidden')
            memberEl.innerHTML = visibleText + dots

            btnElement.addEventListener('click', function () {
                if (btnElement.classList.contains('isHidden')) {
                    btnElement.innerHTML = 'weniger ansehen';
                    btnElement.classList.replace('isHidden', 'isVisible')
                    memberEl.innerHTML = fullText;
                } else if (btnElement.classList.contains('isVisible')) {
                    btnElement.innerHTML = 'mehr ansehen';
                    btnElement.classList.replace('isVisible', 'isHidden')
                    memberEl.innerHTML = visibleText + dots;
                }
            })
        }
    }
}
