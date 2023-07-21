<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car894785610.fields.test') }}" for="11" :errors="$errors->get('testCar894785610.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car894785610.fields.test')}}" name="testCar894785610.test" id="11" wire:model.defer="testCar894785610.test" />
</x-laragen::input.group>