<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1879320840.fields.test') }}" for="7" :errors="$errors->get('testCar1879320840.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1879320840.fields.test')}}" name="testCar1879320840.test" id="7" wire:model.defer="testCar1879320840.test" />
</x-laragen::input.group>