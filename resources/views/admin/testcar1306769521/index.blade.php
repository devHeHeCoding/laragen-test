<x-layouts.app>
    <div class="row">
        <div class="card bg-white">
            <div class="card-header border-b border-blueGray-200">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('cruds.testcar1306769521.title_multiple') }}
                    </h6>
                </div>
            </div>

            @livewire('testcar1306769521.index')

        </div>
    </div>
</x-layouts.app>