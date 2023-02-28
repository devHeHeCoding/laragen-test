<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car357195745.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car357195745.edit', ['testCar357195745' => $testCar357195745])

</x-layouts.app>