<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.show') }}
                        {{ trans('cruds.test-car2114012326.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('test-car2114012326.show', ['testCar2114012326' => $testCar2114012326])
            </div>
        </div>
    </div>
</x-layouts.app>