<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.test-car1818946289.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('test-car1818946289.index')

</x-layouts.app>