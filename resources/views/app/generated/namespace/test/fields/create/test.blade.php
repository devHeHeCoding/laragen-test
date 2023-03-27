<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1415722299.fields.test') }}" for="7" :errors="$errors->get('testCar1415722299.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1415722299.fields.test')}}" name="testCar1415722299.test" id="7" wire:model.defer="testCar1415722299.test" />
</x-laragen::input.group>