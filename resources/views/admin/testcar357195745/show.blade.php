<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car357195745.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car357195745.show', ['testCar357195745' => $testCar357195745])

</x-layouts.app>