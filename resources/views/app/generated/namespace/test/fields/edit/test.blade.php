<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car170699924.fields.test') }}" for="7" :errors="$errors->get('testCar170699924.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car170699924.fields.test')}}" name="testCar170699924.test" id="7" wire:model.defer="testCar170699924.test" />
</x-laragen::input.group>