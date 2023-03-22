<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car612343464.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar612343464' => $testCar612343464])

</x-layouts.app>