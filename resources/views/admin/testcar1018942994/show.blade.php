<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.show') }}
                        {{ trans('cruds.test-car1018942994.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('test-car1018942994.show', ['testCar1018942994' => $testCar1018942994])
            </div>
        </div>
    </div>
</x-layouts.app>