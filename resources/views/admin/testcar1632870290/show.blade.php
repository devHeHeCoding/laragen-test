<x-'x-layouts.app'>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.show') }}
                        {{ trans('cruds.{{ $modelName }}.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar1632870290.show', ['testcar1632870290' => $testcar1632870290])
            </div>
        </div>
    </div>
</x-'layouts.app'>
