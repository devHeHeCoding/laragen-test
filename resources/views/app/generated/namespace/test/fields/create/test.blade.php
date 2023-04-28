<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1905069477.fields.test') }}" for="7" :errors="$errors->get('testCar1905069477.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1905069477.fields.test')}}" name="testCar1905069477.test" id="7" wire:model.defer="testCar1905069477.test" />
</x-laragen::input.group>