<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1387683857.fields.test') }}" for="7" :errors="$errors->get('testCar1387683857.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1387683857.fields.test')}}" name="testCar1387683857.test" id="7" wire:model.defer="testCar1387683857.test" />
</x-laragen::input.group>