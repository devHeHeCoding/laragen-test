<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car659759750.fields.test') }}" for="11" :errors="$errors->get('testCar659759750.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car659759750.fields.test')}}" name="testCar659759750.test" id="11" wire:model.defer="testCar659759750.test" />
</x-laragen::input.group>