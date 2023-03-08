<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car791739313.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car791739313.show', ['testCar791739313' => $testCar791739313])

</x-layouts.app>