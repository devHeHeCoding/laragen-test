<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1906832542.fields.test') }}" for="7" :errors="$errors->get('testCar1906832542.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1906832542.fields.test')}}" name="testCar1906832542.test" id="7" wire:model.defer="testCar1906832542.test" />
</x-laragen::input.group>