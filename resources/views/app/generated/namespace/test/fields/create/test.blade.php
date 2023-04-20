<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car530724548.fields.test') }}" for="7" :errors="$errors->get('testCar530724548.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car530724548.fields.test')}}" name="testCar530724548.test" id="7" wire:model.defer="testCar530724548.test" />
</x-laragen::input.group>