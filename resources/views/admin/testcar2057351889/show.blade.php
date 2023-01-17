<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.show') }}
                        {{ trans('cruds.testcar2057351889.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar2057351889.show', ['testcar2057351889' => $testcar2057351889])
            </div>
        </div>
    </div>
</x-layouts.app>