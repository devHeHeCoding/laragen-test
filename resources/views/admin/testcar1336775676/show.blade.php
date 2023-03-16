<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car1336775676.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car1336775676.show', ['testCar1336775676' => $testCar1336775676])

</x-layouts.app>