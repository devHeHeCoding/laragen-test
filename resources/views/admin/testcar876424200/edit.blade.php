<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car876424200.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car876424200.edit', ['testCar876424200' => $testCar876424200])

</x-layouts.app>