<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1481583318.fields.test') }}" for="7" :errors="$errors->get('testCar1481583318.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1481583318.fields.test')}}" name="testCar1481583318.test" id="7" wire:model.defer="testCar1481583318.test" />
</x-laragen::input.group>