<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1196383960.fields.test') }}" for="7" :errors="$errors->get('testCar1196383960.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1196383960.fields.test')}}" name="testCar1196383960.test" id="7" wire:model.defer="testCar1196383960.test" />
</x-laragen::input.group>