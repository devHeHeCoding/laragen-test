<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.test-car243053359.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-car243053359.edit', ['testCar243053359' => $testCar243053359])
        </div>
    </div>
</div>
</x-layouts.app>