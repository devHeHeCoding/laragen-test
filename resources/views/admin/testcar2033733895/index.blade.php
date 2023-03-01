<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.test-car2033733895.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>        <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:headerActions>
    @livewire('test-car2033733895.index')

</x-layouts.app>