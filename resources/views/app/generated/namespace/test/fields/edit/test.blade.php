<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car1162866283.fields.test') }}" for="11" :errors="$errors->get('testCar1162866283.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1162866283.fields.test')}}" name="testCar1162866283.test" id="11" wire:model.defer="testCar1162866283.test" />
</x-laragen::input.group>