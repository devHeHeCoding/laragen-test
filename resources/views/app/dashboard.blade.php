<x-layouts.app>

    <x-slot:title>
        <h1>Dashboard Title</h1>
    </x-slot:title>

    <x-slot:headerActions>
        <div class="button-group">
            <x-laragen::link color="primary">Link primary</x-laragen::link>
            <x-laragen::link color="secondary">Link secondary</x-laragen::link>
            <x-laragen::link color="white">Link white</x-laragen::link>
            <x-laragen::link>Link simple</x-laragen::link>
        </div>
        <div class="mt-4 button-group">
            <x-laragen::button>Button primary</x-laragen::button>
            <x-laragen::button color="secondary">Button secondary</x-laragen::button>
            <x-laragen::button color="white">Button white</x-laragen::button>
            <x-laragen::button color="link">Button link</x-laragen::button>
        </div>
    </x-slot:headerActions>

</x-layouts.app>
