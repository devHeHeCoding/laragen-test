<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar1306769521.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar1306769521.edit', ['testcar1306769521' => $testcar1306769521])
        </div>
    </div>
</div>
</x-layouts.app>