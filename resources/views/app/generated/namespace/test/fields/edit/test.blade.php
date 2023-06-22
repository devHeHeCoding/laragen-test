<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car759537474.fields.test') }}" for="7" :errors="$errors->get('testCar759537474.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car759537474.fields.test')}}" name="testCar759537474.test" id="7" wire:model.defer="testCar759537474.test" />
</x-laragen::input.group>