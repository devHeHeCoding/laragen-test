<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car42896796.fields.test') }}" for="7" :errors="$errors->get('testCar42896796.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car42896796.fields.test')}}" name="testCar42896796.test" id="7" wire:model.defer="testCar42896796.test" />
</x-laragen::input.group>