<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1804533024.fields.test') }}" for="11" :errors="$errors->get('testCar1804533024.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1804533024.fields.test')}}" name="testCar1804533024.test" id="11" wire:model.defer="testCar1804533024.test" />
</x-laragen::input.group>