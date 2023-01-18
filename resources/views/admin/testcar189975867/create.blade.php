<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.create') }}
                        {{ trans('cruds.test-car189975867.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('test-car189975867.create')
            </div>
        </div>
    </div>
</x-layouts.app>