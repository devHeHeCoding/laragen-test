<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2007594393.fields.test') }}" for="7" :errors="$errors->get('testCar2007594393.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2007594393.fields.test')}}" name="testCar2007594393.test" id="7" wire:model.defer="testCar2007594393.test" />
</x-laragen::input.group>