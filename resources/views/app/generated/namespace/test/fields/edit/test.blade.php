<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car399796449.fields.test') }}" for="7" :errors="$errors->get('testCar399796449.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car399796449.fields.test')}}" name="testCar399796449.test" id="7" wire:model.defer="testCar399796449.test" />
</x-laragen::input.group>