<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.test-car1485979483.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-car1485979483.edit', ['testCar1485979483' => $testCar1485979483])
        </div>
    </div>
</div>
</x-layouts.app>