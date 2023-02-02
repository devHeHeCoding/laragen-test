<x-laragen::input.group label="{{ __trans('cruds.test-car1214760672.fields.test') }}" for="7" :errors="$errors->get('testCar1214760672.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1214760672.test" id="7" wire:model.defer="testCar1214760672.test" />
</x-laragen::input.group>