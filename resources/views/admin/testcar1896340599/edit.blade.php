<x-'x-layouts.app'>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.{{ strtolower($modelName) }}.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar1896340599.edit', ['testcar1896340599' => $testcar1896340599])
        </div>
    </div>
</div>
</x-'layouts.app'>
