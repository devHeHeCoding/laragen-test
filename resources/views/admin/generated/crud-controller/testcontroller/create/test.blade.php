<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1844893232.fields.test') }}" for="7" :errors="$errors->get('testCar1844893232.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1844893232.fields.test')}}" name="testCar1844893232.test" id="7" wire:model.defer="testCar1844893232.test" />
</x-laragen::input.group>