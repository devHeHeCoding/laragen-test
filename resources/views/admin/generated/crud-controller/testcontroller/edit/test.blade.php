<x-laragen::input.group label="{{ __trans('cruds.test-car1498677870.fields.test') }}" for="7" :errors="$errors->get('testCar1498677870.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1498677870.test" id="7" wire:model.defer="testCar1498677870.test" />
</x-laragen::input.group>