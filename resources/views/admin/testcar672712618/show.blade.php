<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car672712618.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car672712618.show', ['testCar672712618' => $testCar672712618])

</x-layouts.app>