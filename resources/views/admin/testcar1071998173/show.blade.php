<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1071998173.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1071998173.show', ['testCar1071998173' => $testCar1071998173])

</x-layouts.app>