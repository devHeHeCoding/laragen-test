<div class="profile-menu" x-data="{ open: false }">
    <div>
        <button @click="open = !open" type="button"
                class="profile-menu__activator"
                :aria-expanded="open" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <i class="fas fa-user fa-xl text-blue-400"></i>
        </button>
    </div>
    <div x-show="open" @click.outside="open = false" x-cloak
         x-transition:enter="transition ease-out duration-100 transform"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75 transform"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="profile-menu__dropdown"
         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
        <a href="#" class="profile-menu__dropdown-item active" role="menuitem" tabindex="-1">Your Profile</a>
        <a href="#" class="profile-menu__dropdown-item" role="menuitem" tabindex="-1">Settings</a>
        <a href="#" class="profile-menu__dropdown-item" role="menuitem" tabindex="-1">Sign out</a>
    </div>
</div>
