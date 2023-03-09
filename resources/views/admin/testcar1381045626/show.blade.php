<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1381045626.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1381045626.show', ['testCar1381045626' => $testCar1381045626])

</x-layouts.app>