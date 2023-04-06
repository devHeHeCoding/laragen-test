<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1717836069.fields.test') }}" for="7" :errors="$errors->get('testCar1717836069.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1717836069.fields.test')}}" name="testCar1717836069.test" id="7" wire:model.defer="testCar1717836069.test" />
</x-laragen::input.group>