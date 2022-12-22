<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white" x-data>
    <button type="button" @click="$store.layout.toggleNavigation()"
            class="px-4 border-r bord`er-gray-300 text-blue-400 focus focus-inset md:hidden">
        <span class="sr-only">Deschide meniul</span>
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex"></div>
        <div class="ml-4 flex items-center md:ml-6">
            <!-- Profile menu -->
            <x-layouts.navigation.profile-menu/>
        </div>
    </div>
</div>
