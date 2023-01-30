<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.test-car417718973.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-car417718973.edit', ['testCar417718973' => $testCar417718973])
        </div>
    </div>
</div>
</x-layouts.app>