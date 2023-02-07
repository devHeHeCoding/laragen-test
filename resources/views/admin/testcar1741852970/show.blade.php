<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1741852970.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1741852970.show', ['testCar1741852970' => $testCar1741852970])

</x-layouts.app>