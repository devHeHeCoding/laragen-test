<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car116954758.fields.test') }}" for="7" :errors="$errors->get('testCar116954758.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car116954758.fields.test')}}" name="testCar116954758.test" id="7" wire:model.defer="testCar116954758.test" />
</x-laragen::input.group>