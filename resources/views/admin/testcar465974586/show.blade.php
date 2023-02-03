<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car465974586.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car465974586.show', ['testCar465974586' => $testCar465974586])

</x-layouts.app>