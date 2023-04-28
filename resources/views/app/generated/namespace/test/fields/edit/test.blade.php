<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car723382524.fields.test') }}" for="7" :errors="$errors->get('testCar723382524.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car723382524.fields.test')}}" name="testCar723382524.test" id="7" wire:model.defer="testCar723382524.test" />
</x-laragen::input.group>