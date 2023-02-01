<ul class="sidebar__wrapper-menu">
            <li x-data="{ isOpen: false }" :aria-expanded="isOpen">
        <button type="button" :aria-expanded="isOpen" @click="isOpen = !isOpen"
                class="sidebar__wrapper-menu-item active">
            <i class="fa-thin fa-pallet-box sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Dr.</span>
            <i class="fal fa-chevron-down sidebar__wrapper-menu-item-icon-collapse" x-show="!isOpen"></i>
            <i class="fal fa-chevron-up sidebar__wrapper-menu-item-icon-collapse" x-show="isOpen"></i>
        </button>
        <ul :hidden="!isOpen">
                            <li>
        <a href="" class="sidebar__wrapper-menu-item">
            <i class="Et modi. sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Miss</span>
        </a>
    </li>
                    </ul>
    </li>
    </ul>
