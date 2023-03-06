<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1044631486.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1044631486.show', ['testCar1044631486' => $testCar1044631486])

</x-layouts.app>