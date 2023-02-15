<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.test-car11382236.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('test-car11382236.show', ['testCar11382236' => $testCar11382236])

</x-layouts.app>