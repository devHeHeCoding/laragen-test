<x-layouts.app>

    <x-slot:title>
        <h1>Dashboard Title</h1>
    </x-slot:title>

    <x-slot:headerActions>
        <div class="mt-4 button-group">
            <x-laragen::button>Button primary</x-laragen::button>
        </div>
    </x-slot:headerActions>

    <div class="bg-white rounded shadow">
        <x-laragen::tabs.tabs active="Date Generale">
            <x-laragen::tabs.tab name="Date Generale" icon="fal fa-user-gear">
                <p>Date Generale content</p>
            </x-laragen::tabs.tab>
            <x-laragen::tabs.tab name="Produse" icon="fal fa-box-open">
                <p>Produse content</p>
            </x-laragen::tabs.tab>
            <x-laragen::tabs.tab name="Utilizatori" icon="fal fa-users">
                <p>Utilizatori content</p>
            </x-laragen::tabs.tab>
        </x-laragen::tabs.tabs>
    </div>

</x-layouts.app>
