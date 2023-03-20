<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1018937047.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1018937047.show', ['testCar1018937047' => $testCar1018937047])

</x-layouts.app>