<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.test-car361980884.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-car361980884.edit', ['testCar361980884' => $testCar361980884])
        </div>
    </div>
</div>
</x-layouts.app>