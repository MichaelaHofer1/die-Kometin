
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
    const more = 'mehr';
    const less = 'weniger';
    const theBtn = function (value) {
        return '<br>' + `<span class="show-more-btn ${value}">` + `${value} anzeigen` + '</span>';
    }

    //let btnShowMore = '<br>' + '<span class="show-more-btn">' + 'mehr anzeigen' + '</span>';
    //let btnShowLess = '<br>' + '<span class="show-more-btn">' + 'weniger anzeigen' + '</span>';


    description.forEach((text, i) => {
        if (text.textContent.length >= 450) {
            let truncate = text.textContent.substring(0, 450) + '...';
            let fullText = text.textContent.substring(0, text.length) + theBtn(less);
            text.innerHTML = truncate + theBtn(more);

            const btnClicked = document.querySelectorAll('.show-more-btn')
            const moreBtn = document.querySelectorAll('.mehr');
            const lessBtn = document.querySelectorAll('.weniger');

            const makeFullText = function () {
                btnClicked.forEach(( btn, i) => {
                    btn.innerHTML = 'weniger anzeigen';
                    text.innerHTML = fullText
                })
            }

            const makeCroppedText = function () {
                btnClicked.forEach(( btn, i) => {
                    text.innerHTML = truncate + theBtn(less)
                })
            }

            moreBtn.forEach((btn, i ) => {
                btn.addEventListener('click', makeFullText)
            })

            lessBtn.forEach((btn, i ) => {
                btn.addEventListener('click', makeCroppedText)
            })



            /*const btnIsClicked = function (){
                btnClicked.forEach((btn, i ) => {
                    btn.addEventListener('click', function () {
                        if(btn.classList.contains('mehr')) {
                            console.log('ja')
                            btn.innerHTML = 'weniger anzeigen';
                            text.innerHTML = fullText

                        } else if (btn.classList.contains('weniger')) {
                            console.log('nein')
                            btn.innerHTML = 'mehr anzeigen';
                            btn.innerHTML.style.color = 'lavender';
                            text.innerHTML = truncate + theBtn(less)
                        }
                    })
                })
            }*/






            moreBtn.forEach((btn, i) => {
                btn.addEventListener('click', function () {
                    btn.innerHTML = 'weniger anzeigen';
                    text.innerHTML = fullText
                })
            })

            lessBtn.forEach((btn, i) => {
                btn.addEventListener('click', function () {
                    btn.innerHTML = 'mehr anzeigen';
                    btn.innerHTML.style.color = 'lavender';
                    text.innerHTML = truncate + theBtn(less)
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
        }
    })
}




//////////////////////
//////////////////////
//////////////////////



const memberText = document.querySelectorAll('.member-description');
const longDescriptions = [];
let croppedText = [], hiddenText = [], fullDescription = [];


const cropLongDescriptions = function (option) {
    longDescriptions.forEach( (descr, i) => {
        croppedText.push(descr.textContent.substring(0, 450) + '...');
        hiddenText.push(descr.textContent.substring(450, descr.length));
        descr.innerHTML = croppedText[i] + '<br>' + '<span class="show-more-btn">' + option + '</span>';
    })
}

const isTextLong = function () {
    memberText.forEach((member, i) => {
        if(member.innerHTML.length >= 450) {
            longDescriptions.push(member);
            cropLongDescriptions('mehr ansehen');
        }
    })
}


/*isTextLong();*/

const btnShowMore = document.querySelectorAll('.show-more-btn');
const btnShowMoreArray = [...btnShowMore];
const showFullText = function () {
    btnShowMoreArray.forEach((btn, i) => {
        btn.addEventListener('click', function () {
            longDescriptions[i].innerHTML = croppedText[i].replace('...', '') + hiddenText[i] + '<br>' + '<span class="show-more-btn show-less-btn">' + 'weniger ansehen' + '</span>';
        })


    })
}



const hideFullText = function () {

}



/*showFullText()*/



//////////////////////////////////////////////

const textExcerpt1 = function () {
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


textExcerpt1();




















