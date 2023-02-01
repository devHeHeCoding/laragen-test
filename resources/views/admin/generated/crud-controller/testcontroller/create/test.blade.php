<x-laragen::input.group label="{{ __trans('cruds.test-car1980886838.fields.test') }}" for="7" :errors="$errors->get('testCar1980886838.test')" >
    <x-laragen::input.text placeholder="test" name="testCar1980886838.test" id="7" wire:model.defer="testCar1980886838.test" />
</x-laragen::input.group>