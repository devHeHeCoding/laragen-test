import './custom-select'

import Alpine from 'alpinejs'

import {library, dom} from '@fortawesome/fontawesome-svg-core'
import {faUser as fasFaUser, faCircle as fasCircle, faHouse as fasHouse} from '@fortawesome/pro-solid-svg-icons'
// import {} from '@fortawesome/pro-regular-svg-icons'
import {faChevronDown as falChevronDown, faChevronUp as falChevronUp} from '@fortawesome/pro-light-svg-icons'
import {
    faHouse as fatHouse,
    faCashRegister as fatCashRegister,
    faBoxesPacking as fatBoxesPacking,
    faPalletBox as fatPalletBox
} from '@fortawesome/pro-thin-svg-icons'

library.add(fasFaUser, fatHouse, fatCashRegister, falChevronDown, falChevronUp, fasCircle, fatBoxesPacking, fatPalletBox, fasHouse)
dom.watch()

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

