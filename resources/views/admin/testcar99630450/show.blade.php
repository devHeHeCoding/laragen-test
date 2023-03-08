<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car99630450.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car99630450.show', ['testCar99630450' => $testCar99630450])

</x-layouts.app>