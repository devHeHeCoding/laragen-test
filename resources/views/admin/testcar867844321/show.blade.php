<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car867844321.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car867844321.show', ['testCar867844321' => $testCar867844321])

</x-layouts.app>