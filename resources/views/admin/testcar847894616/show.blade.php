<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car847894616.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car847894616.show', ['testCar847894616' => $testCar847894616])

</x-layouts.app>