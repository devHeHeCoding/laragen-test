<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car2084720087.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car2084720087.show', ['testCar2084720087' => $testCar2084720087])

</x-layouts.app>