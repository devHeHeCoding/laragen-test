<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2093887144.fields.test') }}" for="7" :errors="$errors->get('testCar2093887144.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2093887144.fields.test')}}" name="testCar2093887144.test" id="7" wire:model.defer="testCar2093887144.test" />
</x-laragen::input.group>