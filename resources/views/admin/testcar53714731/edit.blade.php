<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.edit') }}
                        {{ trans('cruds.testcar53714731.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar53714731.edit', ['testcar53714731' => $testcar53714731])
            </div>
        </div>
    </div>
</x-layouts.app>
