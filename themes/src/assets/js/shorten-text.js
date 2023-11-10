'use strict';


//ab 450 Zeichen beim nächsten Wort ein "mehr lesen" tag einfügen und den restlichen Text verstecken mit "..."

//checken ob index 450 ein Leerzeichen ist
//falls nicht, so lange weiterzählen, bis es ein Leerzeichen gibt
// statt dem leerzeichen drei Punkte einfügen
// restlichen Text verstecken
// button einfügen mit "mehr lesen"
// wenn button geklickt wird PUnkte weg, text verlängern, button mti "weniger lesen"


const textExcerpt = function () {
    const description = document.querySelectorAll('.member-description');
    let btnShowMore = '<br>' + '<span class="show-more-btn">' + 'mehr anzeigen' + '</span>';
    let btnShowLess = '<br>' + '<span class="show-more-btn">' + 'weniger anzeigen' + '</span>';

    description.forEach((text, i) => {
        if (text.textContent.length >= 450) {
            let truncate = text.textContent.substring(0, 450) + '...';
            let fullText = text.textContent.substring(0, text.length);
            text.innerHTML = truncate + btnShowMore;

            const moreBtn = document.querySelectorAll('.show-more-btn');
            const lessBtn = document.querySelectorAll('.show-less-btn');

            moreBtn.forEach((btn, i) => {
                btn.addEventListener('click', function () {
                    if (btn.innerHTML === 'mehr anzeigen') {
                        btn.innerHTML = 'weniger anzeigen';
                        text.innerHTML = fullText
                        btn.classList.add('.show-less-btn')
                    }
                })
            })

            lessBtn.forEach((btn, i) => {
                btn.addEventListener('click', function () {
                    if (btn.innerHTML === 'weniger anzeigen') {
                        btn.innerHTML = 'mehr anzeigen';
                        text.innerHTML = truncate + btnShowMore
                    }
                })
            })
            console.log(moreBtn, lessBtn)
        }
    })
}


textExcerpt();