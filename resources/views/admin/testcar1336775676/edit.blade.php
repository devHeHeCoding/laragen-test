<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car1336775676.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car1336775676.edit', ['testCar1336775676' => $testCar1336775676])

</x-layouts.app>