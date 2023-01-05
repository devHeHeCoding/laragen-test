<x-layouts.app>
    <div class="row">
        <div class="card bg-blueGray-100">
            <div class="card-header">
                <div class="card-header-container">
                    <h6 class="card-title">
                        {{ trans('global.edit') }}
                        {{ trans('cruds.testcar1455935900.title_singular') }}
                    </h6>
                </div>
            </div>

            <div class="card-body">
                @livewire('testcar1455935900.edit', ['testcar1455935900' => $testcar1455935900])
            </div>
        </div>
    </div>
</x-layouts.app>
