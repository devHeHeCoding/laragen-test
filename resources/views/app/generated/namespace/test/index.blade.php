<x-layouts.app>
    <x-slot:title>        <h1>
            {{ trans('cruds.test-car207063216.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>                <x-laragen::button href="{{ route('laragen.admin.route.prefix.create') }}">            {{ trans('global.create') }}
        </x-laragen::button>    </x-slot:headerActions>
    @livewire('namespace.test.index')

</x-layouts.app>