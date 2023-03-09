<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1400889639.fields.test') }}" for="7" :errors="$errors->get('testCar1400889639.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1400889639.fields.test')}}" name="testCar1400889639.test" id="7" wire:model.defer="testCar1400889639.test" />
</x-laragen::input.group>