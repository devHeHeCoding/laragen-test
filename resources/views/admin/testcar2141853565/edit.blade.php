<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar2141853565.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar2141853565.edit', ['testcar2141853565' => $testcar2141853565])
        </div>
    </div>
</div>
</x-layouts.app>