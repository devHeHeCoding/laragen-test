<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1727037688.fields.test') }}" for="7" :errors="$errors->get('testCar1727037688.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1727037688.fields.test')}}" name="testCar1727037688.test" id="7" wire:model.defer="testCar1727037688.test" />
</x-laragen::input.group>