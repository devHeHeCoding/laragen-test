<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar585999822.title_singular') }}                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar585999822.edit', ['testcar585999822' => $testcar585999822])
        </div>
    </div>
</div>
</x-layouts.app>