<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1762955650.fields.test') }}" for="7" :errors="$errors->get('testCar1762955650.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1762955650.fields.test')}}" name="testCar1762955650.test" id="7" wire:model.defer="testCar1762955650.test" />
</x-laragen::input.group>