<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.create') }}
                        {{ trans('cruds.testcar1217718184.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar1217718184.create')
            </div>
        </div>
    </div>
</x-layouts.app>