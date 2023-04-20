<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car981531218.fields.test') }}" for="7" :errors="$errors->get('testCar981531218.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car981531218.fields.test')}}" name="testCar981531218.test" id="7" wire:model.defer="testCar981531218.test" />
</x-laragen::input.group>