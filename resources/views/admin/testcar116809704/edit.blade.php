<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar116809704.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar116809704.edit', ['testcar116809704' => $testcar116809704])
        </div>
    </div>
</div>
</x-layouts.app>