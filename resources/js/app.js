import './custom-select'

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.store('layout', {

    navigationIsOpen: true,

    navigationIsBlockedAsOpened: true,

    navigationMouseOut() {
        if (!this.navigationIsBlockedAsOpened) {
            this.navigationIsOpen = false
            console.log('out')
        }
    },

    navigationMouseOver() {
        if (!this.navigationIsBlockedAsOpened) {
            this.navigationIsOpen = true
            console.log('in')
        }
    },

    hoveredNavigation: false,

    toggleNavigation() {

        this.navigationIsOpen = !this.navigationIsOpen
        this.navigationIsBlockedAsOpened = !this.navigationIsBlockedAsOpened

    },

    hasClass(element, clsName) {
        return (' ' + element.className + ' ').indexOf(' ' + clsName + ' ') > -1;
    },

    openNavigation() {
        const sidebar = document.getElementById('sidebar');
        if (this.hasClass(sidebar, 'closed')) {
            this.hoveredNavigation = true
            console.log(this.hoveredNavigation)
        }
    },
    closeNavigation() {
        this.hoveredNavigation = false
    }
})
Alpine.start()

