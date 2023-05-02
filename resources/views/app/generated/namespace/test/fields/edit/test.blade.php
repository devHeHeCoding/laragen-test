<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car784678120.fields.test') }}" for="7" :errors="$errors->get('testCar784678120.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car784678120.fields.test')}}" name="testCar784678120.test" id="7" wire:model.defer="testCar784678120.test" />
</x-laragen::input.group>