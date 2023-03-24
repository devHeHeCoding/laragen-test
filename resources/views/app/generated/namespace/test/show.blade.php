<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car740428112.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('namespace.test.show', ['testCar740428112' => $testCar740428112])

</x-layouts.app>