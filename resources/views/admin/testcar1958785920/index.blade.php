<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.test-car1958785920.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>        <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:headerActions>
    @livewire('test-car1958785920.index')

</x-layouts.app>