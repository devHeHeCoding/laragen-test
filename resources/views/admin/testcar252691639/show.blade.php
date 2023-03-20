<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car252691639.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car252691639.show', ['testCar252691639' => $testCar252691639])

</x-layouts.app>