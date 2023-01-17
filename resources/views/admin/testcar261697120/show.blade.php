<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.show') }}
                        {{ trans('cruds.testcar261697120.title_singular') }}                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar261697120.show', ['testcar261697120' => $testcar261697120])
            </div>
        </div>
    </div>
</x-layouts.app>