<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1520283344.fields.test') }}" for="7" :errors="$errors->get('testCar1520283344.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1520283344.fields.test')}}" name="testCar1520283344.test" id="7" wire:model.defer="testCar1520283344.test" />
</x-laragen::input.group>