<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.create') }}
                        {{ trans('cruds.test-car1898839695.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('test-car1898839695.create')
            </div>
        </div>
    </div>
</x-layouts.app>