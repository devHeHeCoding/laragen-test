<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1761529517.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1761529517.show', ['testCar1761529517' => $testCar1761529517])

</x-layouts.app>