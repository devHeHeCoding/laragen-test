<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car851673644.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar851673644' => $testCar851673644])

</x-layouts.app>