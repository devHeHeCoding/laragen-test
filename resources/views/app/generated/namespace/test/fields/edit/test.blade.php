<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.test-car710223505.fields.test') }}" for="7" :errors="$errors->get('testCar710223505.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car710223505.fields.test')}}" name="testCar710223505.test" id="7" wire:model.defer="testCar710223505.test" />
</x-laragen::input.group>