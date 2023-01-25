<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.create') }}
                        {{ trans('cruds.test-car313451174.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('test-car313451174.create')
            </div>
        </div>
    </div>
</x-layouts.app>