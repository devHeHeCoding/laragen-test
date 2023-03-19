<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car457912317.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car457912317.show', ['testCar457912317' => $testCar457912317])

</x-layouts.app>