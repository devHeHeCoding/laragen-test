<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar607009969.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar607009969.edit', ['testcar607009969' => $testcar607009969])
        </div>
    </div>
</div>
</x-layouts.app>