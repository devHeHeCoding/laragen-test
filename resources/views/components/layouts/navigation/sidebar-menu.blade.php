<ul class="sidebar__wrapper-menu">
            <li x-data="{ isOpen: {{in_array(request()->route()->getName(), ['']) ? 'true' : 'false'}} }" :aria-expanded="isOpen">
        <button type="button" :aria-expanded="isOpen" @click="isOpen = !isOpen"
                class="sidebar__wrapper-menu-item {{in_array(request()->route()->getName(), ['']) ? 'active' : ''}}">
            <i class="fa-thin fa-pallet-box sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Prof.</span>
            <i class="fal fa-chevron-down sidebar__wrapper-menu-item-icon-collapse" x-show="!isOpen"></i>
            <i class="fal fa-chevron-up sidebar__wrapper-menu-item-icon-collapse" x-show="isOpen"></i>
        </button>
        <ul :hidden="!isOpen">
                            <li>
        <a href="" class="sidebar__wrapper-menu-item {{request()->routeIs('') ? 'active' : ''}}">
            <i class="Aut sit. sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Mr.</span>
        </a>
    </li>
                    </ul>
    </li>
    </ul>
