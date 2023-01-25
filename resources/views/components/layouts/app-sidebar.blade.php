<!-- Off-canvas menu for mobile -->
<x-layouts.navigation.off-canvas-mobile-menu/>
<!-- Static sidebar for desktop -->
<div id="sidebar" class="sidebar" x-data
     :class="{
         'opened' :  $store.layout.navigationIsOpen,
         'closed' :  !$store.layout.navigationIsOpen
      } ">
    <div class="sidebar__wrapper" >
        <div class="sidebar__wrapper-logo">
            <div x-show="$store.layout.navigationIsOpen">
                <x-brand.logo>
                    <span class="text-lg leading-tight">Admin</span>
                </x-brand.logo>
            </div>
            <div x-show="!$store.layout.navigationIsOpen">
                <span class="text-2xl font-bold text-primary-400">RO</span>
            </div>
            <div class="sidebar__wrapper-activator">
                <button type="button" @click="$store.layout.toggleNavigation()" class="focus">
                    <span class="sr-only">Deschide meniul</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-12 flex-grow flex flex-col overflow-y-auto">
            <x-layouts.navigation.sidebar-menu/>
        </div>
    </div>
</div>
