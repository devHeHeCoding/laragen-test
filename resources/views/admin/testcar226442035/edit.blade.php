<x-'x-layouts.app'>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{  trans('global.edit')  }}
                        {{  trans('cruds.{{ strtolower($modelName) }}.title_singular')  }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar226442035.edit', ['testcar226442035' => $testcar226442035])
            </div>
        </div>
    </div>
</x-'layouts.app'>
