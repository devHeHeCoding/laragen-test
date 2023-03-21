<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2114917132.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2114917132.show', ['testCar2114917132' => $testCar2114917132])

</x-layouts.app>