<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.test-car289518111.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('test-car289518111.edit', ['testCar289518111' => $testCar289518111])

</x-layouts.app>