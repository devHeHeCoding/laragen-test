<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar1685974392.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar1685974392.edit', ['testcar1685974392' => $testcar1685974392])
        </div>
    </div>
</div>
</x-layouts.app>