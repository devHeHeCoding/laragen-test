<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car341407257.fields.test') }}" for="7" :errors="$errors->get('testCar341407257.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car341407257.fields.test')}}" name="testCar341407257.test" id="7" wire:model.defer="testCar341407257.test" />
</x-laragen::input.group>