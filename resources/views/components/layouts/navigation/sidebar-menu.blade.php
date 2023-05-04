<ul class="sidebar__wrapper-menu">
    <li>
        <a href="#" class="sidebar__wrapper-menu-item">
            <i class="fa-thin fa-house sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Home</span>
        </a>
    </li>
    <li x-data="{ isOpen: true }" :aria-expanded="isOpen">
        <button type="button" :aria-expanded="isOpen" @click="isOpen = !isOpen"
                class="sidebar__wrapper-menu-item active">
            <i class="fa-thin fa-pallet-box sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Profil</span>
            <i class="fal fa-chevron-down sidebar__wrapper-menu-item-icon-collapse" x-show="!isOpen"></i>
            <i class="fal fa-chevron-up sidebar__wrapper-menu-item-icon-collapse" x-show="isOpen"></i>
        </button>
        <ul :hidden="!isOpen">
            <li>
                <a href="#" class="sidebar__wrapper-menu-item">
                    <i class="fa-solid fa-circle sidebar__wrapper-menu-item-icon"></i>
                    <span class="sidebar__wrapper-menu-item-title">Products</span>
                </a>
            </li>
            <li x-data="{ isOpen: true }" :aria-expanded="isOpen">
                <button type="button" :aria-expanded="isOpen" @click="isOpen = !isOpen"
                        class="sidebar__wrapper-menu-item active">
                    <i class="fa-solid fa-circle sidebar__wrapper-menu-item-icon"></i>
                    <span class="sidebar__wrapper-menu-item-title">Billing</span>
                    <i class="fal fa-chevron-down sidebar__wrapper-menu-item-icon-collapse" x-show="!isOpen"></i>
                    <i class="fal fa-chevron-up sidebar__wrapper-menu-item-icon-collapse" x-show="isOpen"></i>
                </button>
                <ul :hidden="!isOpen">
                    <li>
                        <a href="#" class="sidebar__wrapper-menu-item active">
                            <i class="fa-solid fa-circle sidebar__wrapper-menu-item-icon"></i>
                            <span class="sidebar__wrapper-menu-item-title">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar__wrapper-menu-item">
                            <i class="fa-solid fa-circle sidebar__wrapper-menu-item-icon"></i>
                            <span class="sidebar__wrapper-menu-item-title">Inbox</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="sidebar__wrapper-menu-item">
                    <i class="fa-solid fa-circle sidebar__wrapper-menu-item-icon"></i>
                    <span class="sidebar__wrapper-menu-item-title">Invoice</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="sidebar__wrapper-menu-item">
            <i class="fa-thin fa-boxes-packing sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Materii Prime</span>
        </a>
    </li>
    <li>
        <a href="#" class="sidebar__wrapper-menu-item">
            <i class="fa-thin fa-cash-register sidebar__wrapper-menu-item-icon"></i>
            <span class="sidebar__wrapper-menu-item-title">Achiziții</span>
        </a>
    </li>
</ul>
