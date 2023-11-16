'use strict';
// mobilizon class hinzufügen
const mobilizonSection = document.querySelectorAll('.connector-mobilizon_events-list')
export const mobilizonDisplay = function () {
    if(mobilizonSection) {
        mobilizonSection.forEach((list, i) => {
            list.classList.add('event-list')
            console.log(mobilizonSection)
        })
    }
}
mobilizonDisplay()