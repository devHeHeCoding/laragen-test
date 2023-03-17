<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1556945516.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1556945516.show', ['testCar1556945516' => $testCar1556945516])

</x-layouts.app>