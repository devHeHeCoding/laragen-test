<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car237029778.fields.test') }}" for="7" :errors="$errors->get('testCar237029778.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car237029778.fields.test')}}" name="testCar237029778.test" id="7" wire:model.defer="testCar237029778.test" />
</x-laragen::input.group>