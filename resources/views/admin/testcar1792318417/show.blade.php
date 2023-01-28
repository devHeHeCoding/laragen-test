<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1792318417.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1792318417.show', ['testCar1792318417' => $testCar1792318417])

</x-layouts.app>