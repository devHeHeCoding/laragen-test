<x-laragen::input.group label="{{ __trans('cruds.test-car1703159673.fields.test') }}" for="7" :errors="$errors->get('testCar1703159673.test')" >
    <x-laragen::input.text type="number" placeholder="test" name="testCar1703159673.test" id="7" wire:model.defer="testCar1703159673.test" />
</x-laragen::input.group>