<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car689738376.fields.test') }}" for="7" :errors="$errors->get('testCar689738376.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car689738376.fields.test')}}" name="testCar689738376.test" id="7" wire:model.defer="testCar689738376.test" />
</x-laragen::input.group>