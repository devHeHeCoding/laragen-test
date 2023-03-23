<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car467464683.fields.test') }}" for="7" :errors="$errors->get('testCar467464683.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car467464683.fields.test')}}" name="testCar467464683.test" id="7" wire:model.defer="testCar467464683.test" />
</x-laragen::input.group>