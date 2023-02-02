<x-layouts.app>
    <div class="row">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.test-car1975194882.title') }}
                    </h6>
                    <a href="{{ route('laragen.admin.test_cars.create') }}" class="btn btn-secondary">
                        {{ trans('global.create') }}
                    </a>
                </div>
            </div>

            @livewire('test-car1975194882.index')

        </div>
    </div>
</x-layouts.app>