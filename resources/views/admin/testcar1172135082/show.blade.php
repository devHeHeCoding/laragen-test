<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1172135082.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1172135082.show', ['testCar1172135082' => $testCar1172135082])

</x-layouts.app>