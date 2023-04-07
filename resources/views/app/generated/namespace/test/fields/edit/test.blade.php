<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car551476458.fields.test') }}" for="7" :errors="$errors->get('testCar551476458.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car551476458.fields.test')}}" name="testCar551476458.test" id="7" wire:model.defer="testCar551476458.test" />
</x-laragen::input.group>