<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.test-car2116097343.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-car2116097343.edit', ['testCar2116097343' => $testCar2116097343])
        </div>
    </div>
</div>
</x-layouts.app>