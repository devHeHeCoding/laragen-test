<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car749485583.fields.test') }}" for="7" :errors="$errors->get('testCar749485583.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car749485583.fields.test')}}" name="testCar749485583.test" id="7" wire:model.defer="testCar749485583.test" />
</x-laragen::input.group>