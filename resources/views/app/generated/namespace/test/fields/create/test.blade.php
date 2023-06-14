<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1347387071.fields.test') }}" for="7" :errors="$errors->get('testCar1347387071.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1347387071.fields.test')}}" name="testCar1347387071.test" id="7" wire:model.defer="testCar1347387071.test" />
</x-laragen::input.group>