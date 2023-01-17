<x-layouts.app>
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testcar322315932.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('testcar322315932.edit', ['testcar322315932' => $testcar322315932])
        </div>
    </div>
</div>
</x-layouts.app>