<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car280043231.fields.test') }}" for="7" :errors="$errors->get('testCar280043231.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car280043231.fields.test')}}" name="testCar280043231.test" id="7" wire:model.defer="testCar280043231.test" />
</x-laragen::input.group>