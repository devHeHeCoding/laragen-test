<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2074418549.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2074418549.show', ['testCar2074418549' => $testCar2074418549])

</x-layouts.app>