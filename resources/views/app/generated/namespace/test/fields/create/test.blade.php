<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car687131310.fields.test') }}" for="7" :errors="$errors->get('testCar687131310.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car687131310.fields.test')}}" name="testCar687131310.test" id="7" wire:model.defer="testCar687131310.test" />
</x-laragen::input.group>