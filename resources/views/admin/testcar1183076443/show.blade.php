<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1183076443.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1183076443.show', ['testCar1183076443' => $testCar1183076443])

</x-layouts.app>